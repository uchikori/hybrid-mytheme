<div id="postModal" class="modal">
  <div class="modal-bg"></div>
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2 class="modal-title"></h2>
    <img class="modal-thumbnail" src="" alt="">
    <div class="modal-body"></div>
  </div>
</div>

<style>
  .tooltipster-base.tribe-events-tooltip-theme{
    display: none;
  }
  .modal {
    position:fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: none;
        z-index: 99999;
  }
  .modal-bg{
    position:absolute;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    top:0;
    left:0;
  }
  .modal-content{
    position:fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: white;
    border-radius: 5px;
    padding: 20px;
    width: min(960px, 90%);
    height: 90svh;
    padding: 24px 16px;
    overflow-y: scroll;
  }
  .modal-content img{
    width: 100%;
  }
</style>

<footer>
  <?php block_template_part('footer'); ?>
</footer>
</div>

<?php wp_footer(); ?>


<script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
</body>

</html>