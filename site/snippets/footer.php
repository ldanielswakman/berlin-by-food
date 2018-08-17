  <footer class="footer cf" role="contentinfo">

    <main>

      <p>
      <? foreach($site->footer_menu()->toStructure() as $p) : ?>
        <a href="<?= page($p)->url() ?>"><?= page($p)->title()->html() ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
      <? endforeach ?>
      </p>

    </main>

    <br><br>

    <p class="footer-copyright"><?= $site->copyright()->html() ?></p>

  </footer>

</body>
</html>