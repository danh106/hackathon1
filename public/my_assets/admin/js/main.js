function loadimg(){
    var input = document.getElementById('fileimage');
    var file = input.files[0];

    if (file && file.type.startsWith('image/')) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('img').src = e.target.result;
        };
        reader.readAsDataURL(file);
    } else {
        alert("Vui lòng chọn đúng định dạng ảnh.");
    }
}
// tinymce.init({
//     selector: '#editor'
//   });
const quill = new Quill('#editor', {
theme: 'snow',
modules: {
        toolbar: [
            ['bold', 'italic', 'underline'],     
            ['link', 'image', 'blockquote', 'code-block'], 
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'header': [1, 2, false] }],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'align': [] }],
            ['clean']  ,
            [{ 'size': ['10px', '20px', '80px'] }] 
        ],
        // formats: [
        //     'align', 'image' // Các định dạng khác nếu cần
        //   ],
        imageResize: {
            displaySize: true
        },
        
    }
});
setTimeout(function() {
    $('.alert').alert('close');
}, 5000);

function sumbitform(){
    var form=document.getElementById('myform');
    var textarea=document.getElementById('textarea');
    textarea.value=quill.root.innerHTML;
    // textarea.value=tinymce.get('editor').getContent()
    // replace(/<p>/g, '<div>').replace(/<\/p>/g, '</div>')
    form.submit();
}