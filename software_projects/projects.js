document.addEventListener("DOMContentLoaded", function(event) {
  var projects = document.getElementsByClassName("project");
  var current_project = 0;
  setInterval(this.carousel, 1000);

  function corousel() {
    document.getElementsByClassName(projects[current_project]);
  }

});
