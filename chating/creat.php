<?php
// 检查是否表单提交
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 获取用户输入的聊天室文件夹名
    $chatRoomName = trim($_POST['chatRoomName']);
    
    // 检查文件夹名是否合法
    if (empty($chatRoomName)) {
        $message = "聊天室名称不能为空！";
    } else {
        // 源目录，这里假设有一个原始的聊天室模板目录
        $sourceDir = "chat";  // 原聊天室模板目录（已存在）
        
        // 目标目录（用户输入的文件夹名）
        $targetDir = "userchat/" . $chatRoomName;
        
        // 检查请求是创建聊天室还是加入聊天室
        if (isset($_POST['action']) && $_POST['action'] === 'create') {
            // 检查目标目录是否已存在
            if (is_dir($targetDir)) {
                $message = "聊天室已存在，请选择其他名称。";
            } else {
                // 调用复制目录函数
                if (copyDirectory($sourceDir, $targetDir)) {
                    // 创建成功后重定向到聊天室
                    header("Location: $targetDir/index.php"); // 假设每个聊天室都有一个 index.php 文件
                    exit();
                } else {
                    $message = "聊天室创建失败，请重试。";
                }
            }
        } elseif (isset($_POST['action']) && $_POST['action'] === 'enter') {
            // 检查目标目录是否存在
            if (is_dir($targetDir)) {
                // 进入聊天室
                header("Location: $targetDir/index.php");
                exit();
            } else {
                $message = "聊天室不存在，请检查名称。";
            }
        }
    }
}

// 复制目录函数
function copyDirectory($source, $destination) {
    // 创建目标目录
    if (!is_dir($destination)) {
        mkdir($destination, 0777, true);
    }

    // 打开源目录
    $dir = opendir($source);

    // 遍历源目录中的所有文件
    while (($file = readdir($dir)) !== false) {
        // 跳过 . 和 .. 文件
        if ($file == "." || $file == "..") {
            continue;
        }

        $srcPath = $source . DIRECTORY_SEPARATOR . $file;
        $dstPath = $destination . DIRECTORY_SEPARATOR . $file;

        // 如果是目录，则递归复制目录
        if (is_dir($srcPath)) {
            copyDirectory($srcPath, $dstPath);
        } else {
            // 如果是文件，直接复制
            copy($srcPath, $dstPath);
        }
    }

    // 关闭目录
    closedir($dir);

    return true;
}

// 检查用户是否选择不再提示
$noPrompt = isset($_COOKIE['noPrompt']) && $_COOKIE['noPrompt'] == 'true';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>聊天室管理</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 48%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            margin-right: 2%;
            cursor: pointer;
        }
        input[type="submit"].enter {
            background-color: #007bff;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        input[type="submit"].enter:hover {
            background-color: #0056b3;
        }
        .message {
            text-align: center;
            margin-top: 20px;
            color: #d9534f;
        }
        /* 弹窗样式 */
        .modal {
            display: none; /* 默认隐藏 */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            text-align: center;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>在线聊天室</h2>
    <form method="POST" action="">
        <label for="chatRoomName">请输入聊天室名称：</label>
        <input type="text" id="chatRoomName" name="chatRoomName" required>
        <input type="submit" name="action" value="create">
        <input type="submit" name="action" value="enter" class="enter">
    </form>

    <div class="message">
        <?php
        // 显示提交后的消息
        if (isset($message)) {
            echo $message;
        }
        ?>
    </div>
</div>

<!-- 弹窗 -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <p>请聊天室名字设置复杂防止他人误入！<br>聊天室只保留最后50条发言！<br>每周日19:00会删除聊天室。</p>
        <label>
            <input type="checkbox" id="noPromptCheckbox"> 不再提示
        </label>
        <br><br>
        <button onclick="accept()">确定</button>
    </div>
</div>

<script>
    // 检查是否设置了不再提示
    let noPrompt = <?php echo json_encode($noPrompt); ?>;
    
    // 弹出窗口
    function showModal() {
        document.getElementById('myModal').style.display = "block";
    }
    
    // 关闭窗口
    function closeModal() {
        document.getElementById('myModal').style.display = "none";
    }

    // 确定按钮事件
    function accept() {
        if (document.getElementById('noPromptCheckbox').checked) {
            // 设置 cookie 不再提示
            document.cookie = "noPrompt=true; path=/";
        }
        closeModal();
    }

    // 页面加载后检查是否要显示弹窗
    window.onload = function() {
        if (!noPrompt) {
            showModal();
        }
    };
</script>

</body>
</html>

