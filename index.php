<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
      tinymce.init({
          /*
    selector:'textarea'
     max_chars: 1000, // max. allowed chars
    setup: function (ed) {
        var allowedKeys = [8, 37, 38, 39, 40, 46]; // backspace, delete and cursor keys
        ed.on('keydown', function (e) {
            if (allowedKeys.indexOf(e.keyCode) != -1) return true;
            if (tinymce_getContentLength() + 1 > this.settings.max_chars) {
                e.preventDefault();
                e.stopPropagation();
                return false;
            }
            return true;
        });
        ed.on('keyup', function (e) {
            tinymce_updateCharCounter(this, tinymce_getContentLength());
        });
    },
    init_instance_callback: function () { // initialize counter div
        $('#' + this.id).prev().append('<div class="char_count" style="text-align:right"></div>');
        tinymce_updateCharCounter(this, tinymce_getContentLength());
    },
    paste_preprocess: function (plugin, args) {
        var editor = tinymce.get(tinymce.activeEditor.id);
        var len = editor.contentDocument.body.innerText.length;
        var text = $(args.content).text();
        if (len + text.length > editor.settings.max_chars) {
            alert('Pasting this exceeds the maximum allowed number of ' + editor.settings.max_chars + ' characters.');
            args.content = '';
        } else {
            tinymce_updateCharCounter(editor, len + text.length);
        }
    }
});

      */
       selector: "textarea",
            menubar: false,
            toolbar: false,
            statusbar: false,
            
           /* plugins: [
                "autolink lists link preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars",
                "nonbreaking table directionality",
                "paste textcolor colorpicker textpattern toc",
                "image_embed placeholder, code, noneditable, mention"
            ],*/

            
            paste_data_images: false,
            //language: "pt_BR",

            noneditable_regexp: [/\[\[[^\]]+\]\]/g],

             image_advtab: false,

            mentions: {
                insert: function(item) {
                    return "[[" + item.name + "]]";
                }
            },
            
            setup:function(ed){
                ed.on("change", function(e){
                  //  $("#comunicacoes_config-gravar").removeAttr("disabled");
                    
                });
                ed.on("init",function(e){
                    console.log("The Editor has initialized.");
                });
            },
            
            init_instance_callback: function (editor) {
                editor.on("keydown", function (e) {
                    console.log(e.key);
                   var qt= this.contentDocument.body.innerText.length;
                    
                    console.log(qt);
                    if(e.key==true){
                        console.log("clck");
                    }
                    if(e.key=="a"){
                        console.log("teste");
                        console.log(this.contentDocument.body.innerText.length);
                    }
                    /*if(e.key=='Backspace'){
                        console.log('apagar caractere');
                        
                    }*/
                });
            },
          /*
           init_instance_callback: function () { // initialize counter div
       // $('#carac' + this.id).prev().append('<div class="char_count" style="text-align:right"></div>');
        tinymce_updateCharCounter(this, tinymce_getContentLength());
    },
    paste_preprocess: function (plugin, args) {
        var editor = tinymce.get(tinymce.activeEditor.id);
        var len = editor.contentDocument.body.innerText.length;
        var text = $(args.content).text();
        if (len + text.length > editor.settings.max_chars) {
            alert('Pasting this exceeds the maximum allowed number of ' + editor.settings.max_chars + ' characters.');
            args.content = '';
        } else {
            tinymce_updateCharCounter(editor, len + text.length);
        }
    }
});

function tinymce_updateCharCounter(el, len) {
  //  $('#' + el.id).prev().find('.char_count').text(len + '/' + el.settings.max_chars);
  //  console.log(el.id.prev().find('.char_count').text(len + '/' + el.settings.max_chars));
}

function tinymce_getContentLength() {
    return tinymce.get(tinymce.activeEditor.id).contentDocument.body.innerText.length;
            */
        });
//}
    </script>
</head>
<body>
  <textarea>teste</textarea>
</body>
</html>



