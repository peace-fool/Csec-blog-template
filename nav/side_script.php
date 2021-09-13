<script>
      var menu_btn = document.querySelector("#menu-btn");
      var sidebar = document.querySelector("#sidebar");
      var container = document.querySelector(".my-container");
      menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav");
        container.classList.toggle("active-cont");
      });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.13.4/tocbot.min.js"></script>
<script>
  tocbot.init({
  // Where to render the table of contents.
  tocSelector: '.js-toc',
  // Where to grab the headings to build the table of contents.
  contentSelector: '.js-toc-content',
  // Which headings to grab inside of the contentSelector element.
  headingSelector: 'h1, h2, h3',
  // For headings inside relative or absolute positioned containers within content.
  hasInnerContainers: true,
  orderedList: false,
});
</script>
<script>
  function go_top() {
    window.scrollTo(0, 0)
    setTimeout(update_maxHeight, 150) // wait animation
}

function go_bottom() {
    window.scrollTo(0, document.body.scrollHeight)
    setTimeout(update_maxHeight, 150) // wait animation
}
</script>
 