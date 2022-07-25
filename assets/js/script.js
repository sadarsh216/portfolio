let scroll = 0;
const circles = document.querySelector("#circles");
const social_links = document.querySelectorAll(".social-links-wrapper");
window.addEventListener("scroll", (e) => {
  if (window.scrollY < 250) {
    social_links[0].classList.remove("text-accent");
    social_links[0].classList.add("text-white");
  }

  if (window.scrollY > 250 && window.scrollY < window.innerHeight) {
    circles.style.transform = `rotate(${scrollY}deg)`;
    social_links[0].classList.remove("text-white");
    social_links[0].classList.add("text-accent");
  }

  if (window.scrollY > window.innerHeight + 250) {
    social_links[0].classList.remove("text-accent");
    social_links[0].classList.add("text-white");
  }
});

const scroll_element = document.getElementById("scroller");
let scrollToNext = () => {
  window.scrollBy(0, window.innerHeight);
  console.log(window.scrollY);
};

let project = document.querySelector(".projects");
let item = "";
for (let i = 0; i < 6; i++) {
  item =
    item +
    `
          <div
            class="project-item"
            style="
              background: url('./assets/images/linkedin-profile-adarsh.jpeg');
              background-size: contain;
            "
          >
            <div class="fade-grad">
              <p class="title"><strong>Adarsh Singh</strong></p>
              <p class="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta,
                itaque, et est animi ipsum iusto laudantium excepturi tenetur
              </p>
              <button>
                <b
                  >Visit
                  <span> <i id="facebook" class="fas fa-arrow-right"></i></span
                ></b>
              </button>
            </div>
          </div>
  
  `;
}
project.innerHTML = item;
