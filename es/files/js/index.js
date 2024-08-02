//This function will be called when user click changing language
function translate(lng, tagAttr){
    var translate = new Translate();
    translate.init(tagAttr, lng);
    translate.process();
    if(lng == 'en'){
      $("#enTranslator").css('color', '#f4623a');
      $("#esTranslator").css('color', '#212529');
    } 
    if(lng == 'es'){
      $("#esTranslator").css('color', '#f4623a');
      $("#enTranslator").css('color', '#212529');
    }
}
$(document).ready(function(){
  //This is id of HTML element (English) with attribute lng-tag
  $("#enTranslator").click(function(){
    translate('en', 'lng-tag');
  });
  //This is id of HTML element (Khmer) with attribute lng-tag
  $("#esTranslator").click(function(){
    translate('es', 'lng-tag');
  });
});