
  document.addEventListener("DOMContentLoaded", function () {
    const searchBtn = document.querySelector(".search-container button");
    const searchInput = document.querySelector(".search-container input");

    searchBtn.addEventListener("click", function () {
      const query = searchInput.value.trim().toLowerCase();

      // Basic search example — you can replace this with your own logic
      if (query.includes("attendance")) {
        window.location.href = "https://drkist.infinityfreeapp.com/";
      } else if (query.includes("results")) {
        window.location.href = "https://drkresults.kesug.com/";
      } else if (query.includes("placement")) {
        window.location.href = "placements.html"; // Example: your placement page
      } else {
        alert("No results found for: " + query);
      }
    });

    // Optional: Pressing Enter triggers the button
    searchInput.addEventListener("keypress", function (event) {
      if (event.key === "Enter") {
        searchBtn.click();
      }
    });
  });

  function searchPage(query) {
  const textNodes = document.body.innerText.toLowerCase();
  if (textNodes.includes(query.toLowerCase())) {
    alert("Found match on page!");
  } else {
    alert("No results found.");
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const searchBtn = document.querySelector(".search-container button");
  const searchInput = document.querySelector(".search-container input");

  searchBtn.addEventListener("click", function () {
    const query = searchInput.value.trim();
    if (query) {
      searchPage(query);
    }
  });

  searchInput.addEventListener("keypress", function (event) {
    if (event.key === "Enter") {
      searchBtn.click();
    }
  });
});

