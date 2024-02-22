 <script>
    function redirectToCatalog() {
      var dropdown = document.getElementById("catalogDropdown");
      var selectedOption = dropdown.options[dropdown.selectedIndex].value;

      if (selectedOption) {
        // Redirect to the selected catalog page
        window.location.href = selectedOption + ".html";
      }
    }
  </script>