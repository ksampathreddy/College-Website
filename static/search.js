document.addEventListener("DOMContentLoaded", function () {
  const input = document.querySelector(".search-container input");
  const resultsContainer = document.getElementById("search-results");

  input.addEventListener("input", function () {
    const query = this.value.trim().toLowerCase();
    if (query.length < 2) {
      resultsContainer.style.display = "none";
      return;
    }

    fetch("static/search-index.json")
      .then((res) => res.json())
      .then((pages) => {
        const matches = pages.filter((page) =>
          page.keywords.toLowerCase().includes(query)
        );

        if (matches.length > 0) {
          resultsContainer.innerHTML = matches
            .map(
              (match) =>
                `<a href="${match.url}">${match.title}</a>`
            )
            .join("");
          resultsContainer.style.display = "block";
        } else {
          resultsContainer.innerHTML = "<div>No results found.</div>";
          resultsContainer.style.display = "block";
        }
      })
      .catch((err) => {
        console.error("Search error:", err);
        resultsContainer.innerHTML = "<div>Error loading results.</div>";
        resultsContainer.style.display = "block";
      });
  });

  // Optional: Hide results on click outside
  document.addEventListener("click", function (e) {
    if (!e.target.closest(".search-container")) {
      resultsContainer.style.display = "none";
    }
  });
});
