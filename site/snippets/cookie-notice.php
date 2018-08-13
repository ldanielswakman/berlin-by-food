<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#F7F7F5"
      },
      "button": {
        "background": "#1B153E"
      }
    },
    "position": "bottom-right",
    "content": {
      "message": "<?= l::get('cookie_message') ?>",
      "link": "<?= l::get('cookie_learn_more') ?>",
      "href": "imprint",
      "dismiss": "<?= l::get('cookie_button_text') ?>",
    },

  }); 
});
</script>