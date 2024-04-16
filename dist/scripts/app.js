/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
document.addEventListener("DOMContentLoaded", function () {
  particlesJS.load(
    "particles-js",
    "wp-content/themes/Flex IT/dist/scripts/particles.json",
    function () {
      console.log("particles.js loaded - callback");
    }
  );
});
