jQuery(function($) {
  
  
  function maintainSameHeight($list) {
    var height = 0;
    $list.each(function() {
      var $this = $(this);
      if ($this.outerHeight() > height) {
        height = $this.outerHeight();
      }
    });
    $list.css('height', height);
  }
  
  maintainSameHeight($('[data-same-height="blog-info"]'));
  
  $(document).on('click', '[data-file-upload]', function() {
    $(this).closest('[data-file-upload-block]').find('input[type="file"]').click();
    return false;
  });
  $(document).on('change', '[data-file-upload-block] input[type="file"]', function() {
    var $this = $(this);
    $this.closest('[data-file-upload-block]').find('[data-file-name]').text($this.val());
  });
  $('[data-file-upload-block]').each(function() {
    var $root = $(this),
        $file = $root.find('input[type="file"]'),
        $name = $root.find('[data-file-name]');
    if ($file.val().length) {
      $name.text($file.val());
    }
  });
  
});
