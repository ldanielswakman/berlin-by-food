  <footer class="footer">

    <main>

      <p>
      <?php foreach($site->footer_menu()->toStructure() as $p) : ?>
        <a href="<?= page($p)->url() ?>"><?= page($p)->title()->html() ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
      <?php endforeach ?>
      </p>
      
      <p class="colophon"><small><a href="https://ldaniel.eu" target="_blank">designed & built by ldaniel.eu</a></small></p>

      <br/><br/>

    </main>

  </footer>

</body>
</html>