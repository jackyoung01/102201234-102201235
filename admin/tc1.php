<div class="card">
	<div class="card-body">
		<h4 class="header-title">图片上传工具</h4>

		<script rel="stylesheet" src="https://lib.baomitu.com/layer/3.1.1/mobile/layer.js"></script>

		<input type="file" accept="image/*" multiple>         
		<div class="preview">

		<script src="https://lib.baomitu.com/jquery/3.4.0/jquery.min.js" type="text/javascript"></script>
		<script src="https://lib.baomitu.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			var url = 'https://api.uomg.com/api/image.ali';
			$(document).ready(function() {
				$("input[type='file']").change(function(e) {
					file_upload(this.files)
				});
				var obj = $('body');
				obj.on('dragenter', function(e) {
					e.stopPropagation();
					e.preventDefault()
				});
				obj.on('dragover', function(e) {
					e.stopPropagation();
					e.preventDefault()
				});
				obj.on('drop', function(e) {
					e.preventDefault();
					file_upload(e.originalEvent.dataTransfer.files)
				});
			});
			function file_upload(files){
				if (files.length == 0) return alert('请选择图片文件！');
				for(var j = 0,len = files.length; j < len; j++){
					console.log(files[j]);
					let imageData = new FormData();
					imageData.append("file", 'multipart');
					imageData.append("Filedata", files[j]);
					$.ajax({
						url: url,
						type: 'POST',
						data: imageData,
						cache: false,
						contentType: false,
						processData: false,
						dataType: 'json',
						// 图片上传成功
						success: function (result) {
							if (result.code == 1){
								$('.preview').append('<div><img class="img-fluid" src="'+result.imgurl+'" ><textarea class="col-lg-12">'+result.imgurl+'</textarea></div>');
							}else{
								layer.msg('第'+j+'个图片上传失败');
							}
						},
						// 图片上传失败
						error: function () {
							console.log('图片上传失败');
						}
					});
				}
			}
			function url_upload(){
				var urls = $('#urls').val();
				if (urls == false) return alert('请输入图片链接！');
				var UrlArr = urls.split("\n");
				$('#url_upload_model').modal('hide');
				for(var j = 0,len = UrlArr.length; j < len; j++){
					console.log(UrlArr[j]);
					$.getJSON(url, {imgurl: UrlArr[j]}, function(result, textStatus) {
						if (result.code == 1){
							$('.preview').append('<div><img class="img-fluid" src="'+result.imgurl+'" ><textarea class="col-lg-12">'+result.imgurl+'</textarea></div>');
						}else{
							layer.msg('第'+j+'个图片上传失败');
						}
						console.log(result);
					});
				}
			}
		</script>

		
		
	</div>
</div>