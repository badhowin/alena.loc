function setImages(files) {

	preview = document.getElementById('image-list');

	for (var i = 0; i < files.length; i++) {

	    var file = files[i];
	    console.log(file);
	    if (!file.type.startsWith('image/')){ continue }
	    
	    var img = document.createElement("img");
	    img.classList.add("thumb-image");
	    img.file = file;
	    img.onmouseover = setUnderlight;
	    img.onmouseout = unsetUnderlight;
	    img.onclick = picSelected;
	    preview.appendChild(img); // Предполагается, что "preview" это div, в котором будет отображаться содержимое.
	    
	    var reader = new FileReader();
	    reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; };})(img);
	    reader.readAsDataURL(file);
  }
}

function setUnderlight() {
	this.classList.add("thumb-image-underlight")
}

function unsetUnderlight() {
	this.classList.remove("thumb-image-underlight");
}

function picSelected() {
	$('.thumb-image').removeClass('thumb-image-selected');
	$(this).addClass('thumb-image-selected');
}

$("#img-inp").change(function() {
	setImages(this.files);
});

$(".language-swiches-wrapper input[name='language']").click(function(){
	var lang = this.value;
	$(".language-input").removeClass('current-lang');
	$("." + lang).addClass('current-lang');
});

