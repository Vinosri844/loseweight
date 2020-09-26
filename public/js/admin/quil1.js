var quill = new Quill('#editor-container', {
  modules: {
    toolbar: [
      ['bold', 'italic'],
      ['link', 'blockquote', 'code-block', 'image'],
      [{ list: 'ordered' }, { list: 'bullet' }]
    ]
  },
  placeholder: 'Compose an epic...',
  theme: 'snow'
});
$("#form-container").submit(function(){
  // var content = document.querySelector('input[name=content]');
  $("#content").val(JSON.stringify(quill.getContents()));
  $("#status").val(0);
  // alert($("#subscribe").prop('checked'));
  if($("#subscribe").prop('checked')){
	   $("#status").val(1);
  }
  // return false;
});
