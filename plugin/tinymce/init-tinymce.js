tinymce.init({
  selector: "textarea.tinymce",

  theme: "modern",
  skin: "lightgray",

  width: "100%",
  height: 300,

  statusbar: true,
  
  plugins: [
    "advlist autolink link image lists charmap print preview hr anchor pagebreak", 
    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table",
    "save contextmenu directionality emoticons template paste textcolor autoresize",
    "autosave bbcode codesample colorpicker fullpage help imagetools tabfocus textpattern toc",
  ], 
  
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft alignright aligncenter alignjustify | bullist numlist outdent indent | link image | print preview media fullpage |forecolor backcolor emoticons",

  style_formats: [
    {title: "Headers", items: [
      {title: "Header 1", format: "h1"},
      {title: "Header 2", format: "h2"},
      {title: "Header 3", format: "h3"},
      {title: "Header 4", format: "h4"},
      {title: "Header 5", format: "h5"},
      {title: "Header 6", format: "h6"}
    ]},
    {title: "Inline", items: [
      {title: "Bold", icon: "bold", format: "bold"},
      {title: "Italic", icon: "italic", format: "italic"},
      {title: "Underline", icon: "underline", format: "underline"},
      {title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
      {title: "Superscript", icon: "superscript", format: "superscript"},
      {title: "Subscript", icon: "subscript", format: "subscript"},
      {title: "Code", icon: "code", format: "code"},
    ]},
    {title: "Blocks", items: [
      {title: "Paragraph", format: "p"},
      {title: "Blockquote", format: "blockquote"},
      {title: "Div", format: "div"},
      {title: "Pre", format: "pre"},
    ]},
    {title: "Alignment", items: [
      {title: "Left", icon: "alignleft", format: "alignleft"},
      {title: "Center", icon: "aligncenter", format: "aligncenter"},
      {title: "Right", icon: "alignright", format: "alignright"},
      {title: "Justify", icon: "alignjustify", format: "alignjustify"},
    ]}
  ]
});