  <footer class="footer cf" role="contentinfo">

    <main>

      <? $secondmenu_pages = $site->pages()->invisible()->not('home', 'error', 'soon'); ?>

      <p>
      <? foreach($secondmenu_pages as $p) : ?>
        <a href="<?= $p->url() ?>"><?= $p->title()->html() ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
      <? endforeach ?>
      </p>

    </main>

    <br><br>

    <p class="footer-copyright"><?= $site->copyright()->html() ?></p>

  </footer>

</body>
</html>