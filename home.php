<div id="slider">
    <div class="flipster">
        <ul id="instafeed">
            <li><img src="content/Sport-1.jpeg"/></li>
            <li><img src="content/Sport-1.jpeg"/></li>
            <li><img src="content/Sport-1.jpeg"/></li>
            <li><img src="content/Sport-1.jpeg"/></li>
            <li><img src="content/Sport-1.jpeg"/></li>
            <li><img src="content/Sport-1.jpeg"/></li>
        </ul>
    </div>
</div><!-- end #slider -->
<script type="text/javascript">
var feed = new Instafeed({
  clientId: '03df29c2901d48c7b5809849f235ce68',
   get: 'tagged',
   tagName: 'openbondsworld',
  limit: 20,
  sortBy: 'most-recent',
  resolution: 'standard_resolution',
  after: function () {
    var images = $("#instafeed").find('a');
    $.each(images, function(index, image) {
      var delay = (index * 75) + 'ms';
      $(image).css('-webkit-animation-delay', delay);
      $(image).css('-moz-animation-delay', delay);
      $(image).css('-ms-animation-delay', delay);
      $(image).css('-o-animation-delay', delay);
      $(image).css('animation-delay', delay);
      $(image).addClass('animated flipInX');
    });
    $(function(){ 
        $(".flipster").flipster({
            style: 'carousel',
             autoplay: true,
        });
    });
  },
  template: '<li><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></li>'
});
feed.run();
</script>