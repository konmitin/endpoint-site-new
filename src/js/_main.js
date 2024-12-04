"use strict";

const body = document.querySelector("body");
const burger = document.querySelector("#burger");
const menuHidden = document.querySelector("#menu-hidden");

burger.addEventListener("click", () => {
  menuHidden.classList.toggle("active");
  burger.classList.toggle("active");

  if (body.style.overflow != "hidden") {
    body.style.overflow = "hidden";
  } else {
    body.style.overflow = "visible";
  }
});

const automats = document.querySelectorAll(".automat__par-item");
const automatsInfo = document.querySelectorAll(".automat__info-item");

automats.forEach((automat) => {
  automat.addEventListener("mouseover", (event) => {
    automats.forEach((automat) => {
      automat.classList.remove("active");
    });

    automatsInfo.forEach((automatInfo) => {
      automatInfo.classList.remove("active");
    });

    let target = event.target;

    while (!target.classList.contains("automat__par-item")) {
      target = target.parentElement;
    }

    target.classList.add("active");

    let hoverStepId = target.id.split("").reverse()[0];

    console.log(hoverStepId);

    let toActiveStepInfo = document.querySelector(
      "#automat-info-" + hoverStepId
    );

    toActiveStepInfo.classList.add("active");
  });
});

// ===============

const caseTabs = document.querySelectorAll(".case__tab");
const caseContents = document.querySelectorAll(".case__content");

caseTabs.forEach((tab) => {
  tab.addEventListener("click", (event) => {
    caseTabs.forEach((tab) => {
      tab.classList.remove("active");
    });

    caseContents.forEach((caseContent) => {
      caseContent.classList.remove("active");
    });

    let target = event.target;

    while (!target.classList.contains("case__tab")) {
      target = target.parentElement;
    }

    target.classList.add("active");

    let hoverStepId = target.getAttribute('data-tab').split("").reverse()[0];

    console.log(hoverStepId);

    let toActiveStepInfo = document.querySelector(
      "[data-tab='content-" + hoverStepId + "']"
    );

    toActiveStepInfo.classList.add("active");
  });
});
