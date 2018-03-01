CKEDITOR.editorConfig = function( config ) {
config.toolbarGroups = [
{ name: 'styles', groups: [ 'styles' ] },
{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
{ name: 'forms', groups: [ 'forms' ] },
{ name: 'paragraph', groups: [ 'align', 'list', 'indent', 'blocks', 'bidi', 'paragraph' ] },
{ name: 'links', groups: [ 'links' ] },
{ name: 'insert', groups: [ 'insert' ] },
{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
'/',
{ name: 'colors', groups: [ 'colors' ] },
{ name: 'tools', groups: [ 'tools' ] },
{ name: 'others', groups: [ 'others' ] },
{ name: 'about', groups: [ 'about' ] }
];

config.removeButtons = 'Scayt,SelectAll,Find,Replace,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Save,Templates,NewPage,Preview,Print,BidiLtr,BidiRtl,Language,CreateDiv,Blockquote,Outdent,Indent,Anchor,Flash,Smiley,SpecialChar,PageBreak,Iframe,Table,HorizontalRule,CopyFormatting,RemoveFormat,Undo,Redo,Cut,Copy,Paste,PasteText,PasteFromWord,Subscript,Superscript,Strike,Maximize,ShowBlocks,About,TextColor,BGColor,Font,Format,FontSize';
};
