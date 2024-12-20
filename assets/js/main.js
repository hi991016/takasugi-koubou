"use strict";

// add event on multiple element

// if (history.scrollRestoration) {
//   history.scrollRestoration = "auto";
// }
// gsap.registerPlugin(ScrollTrigger);
// ScrollTrigger.clearScrollMemory();

const addEventOnElements = function (elements, eventType, callback) {
  if (elements) {
    for (let i = 0; i < elements.length; i++) {
      elements[i].addEventListener(eventType, callback);
    }
  }
};

// ===== loading =====

$(window).on("pageshow load", function () {
  $("body").removeClass("fadeout");
});

$(window).on("load", function () {
  setTimeout(() => {
    $(".c-loading_content").addClass("is-fade");
  }, 500);
  setTimeout(function () {
    $(".c-loading_container").addClass("hide");
  }, 1800);
  setTimeout(() => {
    $(".is-heading .animate-text").addClass("action");
  }, 2000);
});

/* --------------------------- resize mobile 100vh -------------------------- */

const appHeight = () => {
  const doc = document.documentElement;
  doc.style.setProperty(
    "--app-height",
    `${document.documentElement.clientHeight}px`
  );

  // height menu
  const windowHeight = Math.max(
    document.documentElement.clientHeight,
    window.innerHeight || 0
  );

  document.getElementById("cMenu").style.height = windowHeight + "px";
  if (document.getElementById("servicespage")) {
    $(".services_lightbox").css("height", windowHeight + "px");
  }
};
window.addEventListener("resize", appHeight);
appHeight();

/* ----------------------------- menu show/hide ----------------------------- */

const [menuToggler, menuLinks, menu, toggle, headerCenter] = [
  document.querySelectorAll("[data-menu-toggler]"),
  document.querySelectorAll("[data-menu-link]"),
  document.querySelector("[data-menu]"),
  document.querySelector(".c-header_toggle"),
  document.querySelector(".c-header_center"),
];

const toggleMenu = () => {
  menu.classList.toggle("is-open");
  headerCenter.classList.toggle("--show");
  $(".c-header_link .animate-text").toggleClass("action");
  document.body.classList.toggle("--disable-scroll");
};

const changeTextMenu = () => {
  let el = toggle.innerHTML;
  if (el === "MENU") {
    toggle.innerHTML = "CLOSE";
  }
  if (el === "CLOSE") {
    toggle.innerHTML = "MENU";
  }
};

addEventOnElements(menuToggler, "click", changeTextMenu);
addEventOnElements(menuToggler, "click", toggleMenu);

const closeMenu = () => {
  menu.classList.remove("is-open");
  $(".c-header_link .animate-text").removeClass("action");
  document.body.classList.remove("--disable-scroll");
};

addEventOnElements(menuLinks, "click", closeMenu);

// ===== scroll header =====
$(window).on("load scroll", () => {
  if ($(window).scrollTop() > 100) {
    $(".c-header_center").addClass("--hide");
  } else {
    $(".c-header_center").removeClass("--hide");
  }
});

/* ------------------------------- hover menu ------------------------------- */

const links = document.getElementsByClassName("c-header_link");

for (let i = 0; i < links.length; i++) {
  links[i].onmouseenter = function (event) {
    for (let j = 0; j < links.length; j++) {
      if (links[j] === this) continue;
      links[j].className += " other";
    }
  };

  links[i].onmouseleave = function (event) {
    let hovers = document.getElementsByClassName("other");
    let len = hovers.length;
    for (let j = 0; j < len; j++) {
      hovers[0].className = hovers[0].className.replace(/\sother(\s|$)/, "");
    }
  };
}

/* ------------------------------- scroll fade ------------------------------ */

function onScrollFade() {
  let scrollTop = $(window).scrollTop();
  let bottom = scrollTop + $(window).height();

  $(".js-animate").each(function () {
    if (bottom > $(this).offset().top + 100) {
      $(this).addClass("action");
    }
  });
}

$(window).on("load scroll", onScrollFade);

/* --------------------------- click link fadeout --------------------------- */

$(document).on(
  "click",
  'a:not([href^="#"]):not([target]):not([href^="mailto"]):not([href^="tel"])',
  function (e) {
    e.preventDefault();
    const url = $(this).attr("href");
    if (url !== "") {
      const idx = url.indexOf("#");
      const hash = idx != -1 ? url.substring(idx) : "";
      if ($(hash).length > 0) {
        $("html, body").animate(
          {
            scrollTop: $(hash).offset().top,
          },
          300
        );
        return false;
      }
      $("body").addClass("fadeout");
      setTimeout(function () {
        window.location = url;
      }, 500);
    }
    return false;
  }
);

// ===== remove anchor =====

$('a[href^="#"]').click(function () {
  const speed = 100;
  let href = $(this).attr("href");
  let target = $(href == "#" || href == "" ? "html" : href);
  $("html, body").animate(
    {
      scrollTop: target.offset().top,
    },
    speed,
    "swing"
  );
  return false;
});

let sections = $(".js-section section"),
  nav = $(".is-nav"),
  nav_height = nav.outerHeight();

$(window).on("scroll", function () {
  let cur_pos = $(this).scrollTop();
  sections.each(function () {
    let top = $(this).offset().top - nav_height,
      bottom = top + $(this).outerHeight();

    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find("a").removeClass("active");
      sections.removeClass("active");

      $(this).addClass("active");
      nav.find('a[href="#' + $(this).attr("id") + '"]').addClass("active");
    }
  });
});

/* ----------------------------- scroll parallax ---------------------------- */

if ($(".js-parallax-wrap").length > 0) {
  gsap.registerPlugin(ScrollTrigger);
  // ScrollTrigger.clearScrollMemory();
  ScrollTrigger.clearScrollMemory("manual");
  window.history.scrollRestoration = "manual";
  gsap.utils.toArray(".js-parallax-wrap").forEach(function (t) {
    let r = gsap.to($(t).find(".js-parallax"), {
      yPercent: -16.66666,
      ease: "none",
      scrollTrigger: {
        trigger: t,
        start: "top 80%",
        end: "bottom 0%",
        scrub: 1,
      },
    });
  });
}

/* -------------------------------- homepage -------------------------------- */

if (document.getElementById("homepage")) {
  // ===== services =====
  const bar = document.getElementById("bar");
  $(document).on("click", ".services_tab li", function () {
    let numberIndex = $(this).index();

    if (!$(this).is("active")) {
      $(".services_tab li").removeClass("active");
      $(".services_thumb li").removeClass("active");
      $(".services_content li").removeClass("active");

      switch (numberIndex) {
        case 0:
          bar.style.width = 33 + "%";
          break;
        case 1:
          bar.style.width = 66 + "%";
          break;
        case 2:
          bar.style.width = 100 + "%";
          break;
        default:
          bar.style.width = 33 + "%";
          break;
      }

      // tab
      $(this).addClass("active");
      // image
      $(".services_thumb")
        .find("li:eq(" + numberIndex + ")")
        .addClass("active");
      // content
      $(".services_content")
        .find("li:eq(" + numberIndex + ")")
        .addClass("active");
    }
  });

  // ===== factory =====
  const factorySwiper = new Swiper(".is-factorySwiper", {
    lazy: true,
    slidesPerView: 1,
    speed: 1000,
    loop: true,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
  });

  // ===== resize =====
  const resizeTabServices = () => {
    const servicesLeft = document.querySelector(".services_left");
    const servicesContent = document.querySelectorAll(
      ".homepage .services_content li"
    );
    servicesContent.forEach((query) => {
      query.style.setProperty("top", servicesLeft.offsetHeight + 55 + "px");
    });
  };
  ["resize", "load"].forEach((evt) => {
    window.addEventListener(evt, () => {
      resizeTabServices();
    });
  });
  resizeTabServices();
}

/* ------------------------------ services page ----------------------------- */

if (document.getElementById("servicespage")) {
  // ===== handle tab change =====
  let numberIndex = 0;

  $(window).on("load resize", function () {
    handleTabChange($(".services_nav li.active"));
  });

  function handleTabChange(tab) {
    $(".services_nav .indicator").css({
      width: tab.outerWidth(),
      left: tab.position() ? tab.position().left : 0,
    });
    tab = tab + 1;
  }

  $(document).on("click", ".services_nav li", function () {
    numberIndex = $(this).index();

    if (!$(this).is("active")) {
      $(".services_nav li").removeClass("active");
      $(".services_content").removeClass("active");
      // tab
      $(this).addClass("active");
      handleTabChange($(this));
      // content
      $(".services_content:eq(" + numberIndex + ")").addClass("active");
    }
  });

  /* -------------------------------- lightbox -------------------------------- */

  const lightBox = document.querySelectorAll(".services_lightbox");
  const imgLightbox = document.querySelectorAll(".services_img img");
  const closeLightbox = document.querySelectorAll(".services_close");

  let index = 0;
  let swiperLb;

  const swiperImages = () => {
    swiperLb = new Swiper(".services_swiper", {
      init: false,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      speed: 1000,
      // speed: 0,
      // effect: "fade",
      // fadeEffect: {
      //   crossFade: true,
      // },
      centeredSlides: true,
      slidesPerView: 1,
      loop: true,
      breakpoints: {
        0: {
          draggable: true,
          allowTouchMove: true,
          spaceBetween: 15,
        },
        1024: {
          draggable: false,
          allowTouchMove: false,
        },
      },
      on: {
        init: doSomethingWithActiveSlide,
        slideChange: doSomethingWithActiveSlide,
      },
    });
  };

  swiperImages();

  function doSomethingWithActiveSlide() {
    const EL_currentSlide = this.slides[this.activeIndex];
    const currentTitle = EL_currentSlide.dataset.title;
    const currentCompany = EL_currentSlide.dataset.company;
    const currentSize = EL_currentSlide.dataset.size;

    $(".services_swiper img").addClass("loaded");

    $(".services_caption .title").html(function () {
      return currentTitle;
    });
    $(".services_caption .company").html(function () {
      return currentCompany + ", ";
    });
    $(".services_caption .size").html(function () {
      return currentSize;
    });
  }

  imgLightbox.forEach((item) =>
    item.addEventListener("click", handleZoomImage)
  );

  function handleZoomImage(event) {
    document.body.classList.add("--disable-scroll");
    $("header").fadeOut();
    let image = event.target.getAttribute("key-items");
    index = [...imgLightbox].findIndex(
      (item) => item.getAttribute("key-items") === image
    );
    // console.log('index', index);
    lightBox[numberIndex].classList.add("active");
    if ($(".services_swiper").length > 1) {
      swiperLb[numberIndex].init();
      swiperLb[numberIndex].slideTo(index + 1, 0);
    } else {
      swiperLb.init();
      swiperLb.slideTo(index + 1, 0);
    }
  }

  // close lightbox
  closeLightbox.forEach((query, index) => {
    query.addEventListener("click", () => {
      $("header").fadeIn();
      lightBox[index].classList.remove("active");
      document.body.classList.remove("--disable-scroll");
    });
  });
}

/* --------------------------- order contact page --------------------------- */

if (document.getElementById("contactpage")) {
  // ===== handle tab change =====
  let numberIndex = 0;

  $(window).on("load", function () {
    handleTabChange($(".order_nav li.active"));
  });

  function handleTabChange(tab) {
    $(".order_nav .indicator").css({
      width: tab.outerWidth(),
      left: tab.position() ? tab.position().left : 0,
    });
    tab = tab + 1;
  }

  $(document).on("click", ".order_nav li", function () {
    numberIndex = $(this).index();

    if (!$(this).is("active")) {
      $(".order_nav li").removeClass("active");
      $(".order_content").removeClass("active");
      // tab
      $(this).addClass("active");
      handleTabChange($(this));
      // content
      $(".order_content:eq(" + numberIndex + ")").addClass("active");
    }
  });

  // ====== validate form ======
  const contactForm = document.getElementById("jsForm");
  const category = document.getElementById("category");
  const username = document.getElementById("name");
  const email = document.getElementById("email");
  const emailConfirm = document.getElementById("emailConfirm");
  const inquiry = document.getElementById("inquiry");
  const btnSend = document.getElementById("btnSend");

  let hasError = false;

  // disable option 1
  $(document).ready(function () {
    const $select = $(".wpcf7-select");
    $select.each(function (e) {
      const first_option = $(this).find("option").first();
      if (first_option.attr("value") == "") {
        first_option.attr("disabled", true);
        first_option.attr("hidden", true);
        first_option.attr("selected", true);
      }
    });
  });

  //Show input error messages
  const showError = (input, message) => {
    const formControl = input.parentElement;
    formControl.className = "contact_field error";
    const small = formControl.querySelector("small");
    small.innerText = message;
    hasError = false;
  };

  //show success colour
  const showSucces = (input) => {
    const formControl = input.parentElement;
    formControl.className = "contact_field success";
    hasError = true;
  };

  //check email is valid
  const checkEmail = (input) => {
    const re =
      /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(input.value.trim())) {
      showSucces(input);
    } else {
      showError(input, "Email is not invalid");
    }
  };

  //checkRequired fields
  const checkRequired = (inputArr) => {
    inputArr.forEach(function (input) {
      if (input.value.trim() === "") {
        showError(input, `${getFieldName(input)} is required`);
      } else {
        showSucces(input);
      }
    });
  };

  //get FieldName
  const getFieldName = (input) => {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
  };

  //check input Length
  const checkLength = (input, min, max) => {
    if (input.value.length < min) {
      showError(
        input,
        `${getFieldName(input)} must be at least ${min} characters`
      );
    } else if (input.value.length > max) {
      showError(
        input,
        `${getFieldName(input)} must be les than ${max} characters`
      );
    } else {
      showSucces(input);
    }
  };

  // check mails match
  const checkMailMatch = (input1, input2) => {
    if (input1.value !== input2.value) {
      showError(input2, "Email do not match");
    }
  };

  // ====== handle form ======
  $(".js-clear").click(function () {
    $(".js-form").find("input, textarea").val("");
  });
  $("#js-checkbox").change(function () {
    let isCheck = this.checked;
    if (isCheck) {
      $(this).addClass("active");
      $(this).closest(".js-form").find(".js-send").addClass("active");
    } else {
      $(this).removeClass("active");
      $(this).closest(".js-form").find(".js-send").removeClass("active");
    }
  });

  //Event Listeners
  // contactForm.addEventListener("submit", function (e) {
  //   e.preventDefault();
  // });

  if (btnSend) {
    btnSend.addEventListener("click", (e) => {
      checkRequired([username, email, emailConfirm, inquiry, category]);
      checkLength(username, 3, 99);
      checkEmail(email);
      checkEmail(emailConfirm);
      checkMailMatch(email, emailConfirm);

      if (hasError && $(".contact_field.error").length === 0) {
        $("#jsForm").submit();
      } else {
        return false;
      }
    });
  }
}

/* ------------------------------- factorypage ------------------------------ */

if (document.getElementById("factorypage")) {
  const swiperFactory = new Swiper(".showcase_swiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    lazy: true,
    speed: 600,
    breakpoints: {
      0: {
        spaceBetween: 15,
        draggable: true,
        slidesPerView: 1.1,
      },
      1024: {
        spaceBetween: 20,
        draggable: false,
        slidesPerView: 1.75,
      },
    },
  });

  // ===== custom cursor =====

  const cursorPrev = document.querySelector(".cursor-prev");
  const cursorNext = document.querySelector(".cursor-next");

  const mousemoveHandler = (e) => {
    const target = e.target;
    const tl = gsap.timeline({
      defaults: {
        x: e.clientX,
        y: e.clientY,
        ease: "power2.out",
      },
    });

    if (
      document.querySelector(".swiper-button-next") &&
      document.querySelector(".swiper-button-prev")
    ) {
      // hover section slider
      if (
        target.tagName.toLowerCase() === "button" &&
        target.closest(".swiper-button-next")
      ) {
        tl.to(cursorPrev, {
          opacity: 0,
        }).to(
          cursorNext,
          {
            opacity: 1,
          },
          "-=0.5"
        );
      } else if (
        target.tagName.toLowerCase() === "button" &&
        target.closest(".swiper-button-prev")
      ) {
        tl.to(cursorPrev, {
          opacity: 1,
        }).to(
          cursorNext,
          {
            opacity: 0,
          },
          "-=0.5"
        );
      } else {
        tl.to(".cursor", {
          opacity: 0,
        });
      }
    }
  };

  const mouseleaveHandler = () => {
    if (document.querySelector(".cursor")) {
      gsap.to(".cursor", {
        opacity: 0,
      });
    }
  };
  document.addEventListener("mousemove", mousemoveHandler);
  document.addEventListener("mouseleave", mouseleaveHandler);
}

/* ---------------------------- fade lazyloading ---------------------------- */

$("main img")
  .on("load", function () {
    // when the browser cache is disabled, only this code doesn't work:
    $(this).addClass("loaded");
    // console.log("image loaded correctly");
  })
  .each(function () {
    // to make it work you have to add, catch when image is cache
    if ($(this).prop("complete")) $(this).addClass("loaded");
  });
