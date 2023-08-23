"use strict";

const menuList = document.querySelector(".menu__list");
const menuListTitles = [...document.querySelectorAll(".menu__list_title")];
const menuSubLists = [...document.querySelectorAll(".menu__sub_list")];
const menuListItems = [...document.querySelectorAll(".menu__list_item")];
const addNoteBtn = document.querySelector(".menu_add_btn");
const addNoteForm = document.querySelector(".content__form_area");
const contentFormAreas = [...document.querySelectorAll(".content__form_area")];
const closeAddFormBtns = [...document.querySelectorAll(".content__form_close_btn")];
const formContentArea = document.querySelector(".content");
const contentWrappers = [...document.querySelectorAll(".content__wrapper")];
const contentAreaUpdateForms = [...document.querySelectorAll(".content__form_area-update")];

const updateNoteBtn = document.querySelector(".content__update-btn");

const removeClasses = function (classLists, classToRemove) {
  classLists.forEach((e) => {
    e.classList.remove(classToRemove);
  });
};

const removeClass = function (targetElement, classToAdd) {
  targetElement.classList.remove(classToAdd);
};

const addClasses = function (targetElements, classToAdd) {
  targetElements.forEach((e) => {
    e.classList.add(classToAdd);
  });
};

const addClass = function (targetElement, classToAdd) {
  targetElement.classList.add(classToAdd);
};

function throttle(cb, delay) {
  let wait = false;

  return (...args) => {
    if (wait) {
      return;
    }

    cb(...args);
    wait = true;
    setTimeout(() => {
      wait = false;
    }, delay);
  };
}

const toggleNoteList = function (e) {
  const target = e.target.closest(".menu__list_title");

  if (!target) return;
  const targetParentEl = target.parentElement;
  const currentId = target.dataset.id;
  if (targetParentEl.classList.contains("open")) {
    return () => {
      targetParentEl.classList.remove("open");
    };
  }
  removeClasses(menuListItems, "open");
  addClasses(contentWrappers, "hidden");
  removeClass(document.querySelector(`.content__wrapper[data-id="${currentId}"]`), "hidden");
  targetParentEl.classList.toggle("open");
};

const closePopUpForm = function (e) {
  //// TODO CLOSE UPDATE FORM
  const target = e.target.closest(".content__form_close_btn");
  if (!target) return;
  removeClasses(contentFormAreas, "hidden");
  addClasses(contentFormAreas, "hidden");
};

const openPopUpForm = function () {
  addNoteForm.classList.remove("hidden");
};

// show note contents
menuList.addEventListener("click", throttle(toggleNoteList, 200));

// add a note
addNoteBtn.addEventListener("click", openPopUpForm);

// close pop up form
formContentArea.addEventListener("click", closePopUpForm);

(function () {
  if (contentWrappers.length <= 0) return;
  formContentArea.addEventListener("click", (e) => {
    const targetBtn = e.target.closest(".content__update-btn");
    if (!targetBtn) return;
    const id = targetBtn.dataset.id;
    const targetFormArea = document.querySelector(`.content__form_area-update--${id}`);
    addClasses(contentAreaUpdateForms, "hidden");
    removeClass(targetFormArea, "hidden");
  });
})();
