<?php


?>
    <script src="https://lib.baomitu.com/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript">
    $(document).ready(function() {
    $("#imgboxs #insert_img").click(function() {
        if ($('#img_title').val()) {
            var img_title = $('#img_title').val();
        } else {
            var img_title = $('#title').val();
        }
        if ($('#img_alt').val()) {
            var img_alt = $('#img_alt').val();

        } else {
            var img_alt = $('#title').val();
        }
        if ($('#url').val()) {
            $($(".ke-edit-iframe:first").contents().find(".ke-content")).append("<a target='_blank' href='" + ($('#url').val()) + "'><img src='" + ($('#url').val()) + "' title='" + img_title + "' alt='" + img_alt + "' border='0' width='" + ($('#img_width').val()) + "' height='" + ($('#img_height').val()) + "' /></a>");
        } else {
            alert('未上传图片');
        }
    });
    $("#close_gj").click(function() {
        $("#img_cons").slideUp(200);
    });
    $("#img_titles").click(function() {
        $("#img_cons").toggle();
    });
    $("#clear_img").click(function() {
        $("#img").hide();

        $('#button')[0].innerHTML = '选择本地图片';
    });

});

    function copyTextAreaCt() {
    var oContent = document.getElementById("url");
    oContent.select(); // 选择对象
    document.execCommand("Copy"); // 执行浏览器复制命令
    obj = document.getElementById("fztext");
    obj.value = "成功";
    setTimeout(function() {
        obj.value = "复制";
    },
    2000);

}
    function copyCodeAreaCt() {
    var oContent = document.getElementById("footer_code");
    oContent.select(); // 选择对象
    document.execCommand("Copy"); // 执行浏览器复制命令
    obj = document.getElementById("fzcode");
    obj.value = "已复制";
    setTimeout(function() {
        obj.value = "复制";
    },
    2000);

}
  </script>
	<label for="validationTooltipUsername">获取照片链接</label><br>
    <div class="btn-group mb-2">
      <i id="texts" class="btn btn-light"  style="Width:100%"></i>
      <div class="btn btn-light">
        <input type="file" accept="image/*" style="display:none;" id="file">
        <button type="button" class="btn btn-link btn-rounded" onclick="file.click()" id="button">上传</button>
      </div>
      <div class="btn btn-light">
        <input type="button" class="btn btn-link btn-rounded" onClick="copyTextAreaCt()" id="fztext" value="复制" />
      </div>
    </div>
	

    <!-----我的要求并不多，请保留版权，请勿用于商用，商用引发纠纷与本站无关------>

      <script>
      <script>
    $(document).ready(function() {
    $('.picurl > input').bind('focus mouseover',
    function() {
        if (this.value) {
            this.select()
        }
    });
    $("input[type='file']").change(function(e) {
        images_upload(this.files)
    });
    var obj = $('body');
    obj.on('dragenter',
    function(e) {
        e.stopPropagation();
        e.preventDefault()
    });
    obj.on('dragover',
    function(e) {
        e.stopPropagation();
        e.preventDefault()
    });
    obj.on('drop',
    function(e) {
        e.preventDefault();
        images_upload(e.originalEvent.dataTransfer.files)
    })
});
    var images_upload = function(files) {
    var flag = 0;
    // $('textarea').empty();
    $(files).each(function(key, value) {
        $('#button')[0].innerHTML = '上传中';
        image_form = new FormData();
        image_form.append('file', value);
        console.log(image_form);
        $.ajax({
            url: '../plug/picturebed/ca.php?type=multipart',
            type: 'POST',
            data: image_form,
            mimeType: 'multipart/form-data',
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            success: function(data) {
                if (data.code == '200') {
                    flag++;
                    if (typeof data.pid != 'null') {
                        $("#img").show();
                        $("#fuzhi").show();
                        $("#code").show();
                        $("#footer_code").html('<img src="http://wx2.sinaimg.cn/large/' + data['pid'] + '.jpg" width="' + data['width'] + 'px" height="' + data['height'] + 'px">');
                        $("#texts").html('<input type="text" id="url" class="form-control" value="http://wx2.sinaimg.cn/large/' + data['pid'] + '.jpg">');
                        $("#background").attr('xlink:href', 'http://wx2.sinaimg.cn/large/' + data['pid'] + '.jpg');
						$width = $(window).width(); 
                        if($width < 720){ $("#psdp-wrap").attr('style', 'background:url(http://wx2.sinaimg.cn/large/' + data['pid'] + '.jpg) center 90px no-repeat;background-size:90% 200px;');} else if($width > 720){
                        $("#psdp-wrap").attr('style', 'background:url(http://wx2.sinaimg.cn/large/' + data['pid'] + '.jpg) center 90px no-repeat;background-size:60% 240px;');
						}
                        $("#img_width").val(data['width'] + 'px');
                        $("#img_height").val(data['height'] + 'px');
                    }
                    if (flag == $("input[type='file']")[0].files.length) {
                        if (typeof data.pid != 'null') {
                            $('#button')[0].innerHTML = '成功';
                            setTimeout(function() {
                                $('#button')[0].innerHTML = '上传';
                            },
                            2000);
                        } else {
                            $('#button')[0].innerHTML = '失败';
                            alert('上传出错，请联系网站管理员');
                        }
                    }
                } else {
                    alert(data.msg);
                    $('#button')[0].innerHTML = '失败';
                }
            },
            error: function(XMLResponse) {
                $('#button')[0].innerHTML = '失败';
                alert("error:" + XMLResponse.responseText);
            }
        })
    })
};
    document.onpaste = function(e) {
    var data = e.clipboardData;
    for (var i = 0; i < data.items.length; i++) {
        var item = data.items[i];
        if (item.kind == 'file' && item.type.match(/^image\//i)) {
            var blob = item.getAsFile();
            images_upload(blob)
        }
    }
}
          </script>