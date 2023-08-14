"use strict";

const menuList = document.querySelector(".menu__list");
const menuListTitles = [...document.querySelectorAll(".menu__list_title")];
const menuSubLists = [...document.querySelectorAll(".menu__sub_list")];
const menuListItems = [...document.querySelectorAll(".menu__list_item")];
const addNoteBtn = document.querySelector(".menu_add_btn");
const addNoteForm = document.querySelector(".content__form_area");
const closeAddFormBtn = document.querySelector(".content__form_close_btn");
const contentWrappers = [...document.querySelectorAll(".content__wrapper")];

const removeClasses = function (classLists, classToRemove) {
  classLists.forEach((e) => {
    e.classList.remove(classToRemove);
  });
};

const addClass = function (targetElement, classToAdd) {
  targetElement.classList.add(classToAdd);
};

const addClasses = function (targetElements, classToAdd) {
  targetElements.forEach((e) => {
    e.classList.add(classToAdd);
  });
};

const removeClass = function (targetElement, classToAdd) {
  targetElement.classList.remove(classToAdd);
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
  console.log(currentId);
  if (targetParentEl.classList.contains("open")) {
    return () => {
      targetParentEl.classList.remove("open");
    };
  }
  console.log({ target, targetParentEl });
  removeClasses(menuListItems, "open");
  addClasses(contentWrappers, "hidden");
  removeClass(document.querySelector(`.content__wrapper[data-id="${currentId}"]`), "hidden");
  targetParentEl.classList.toggle("open");
};

const closeAddForm = function () {
  addNoteForm.classList.add("hidden");
};

const showAddForm = function () {
  addNoteForm.classList.remove("hidden");
};

menuList.addEventListener("click", throttle(toggleNoteList, 200));
addNoteBtn.addEventListener("click", showAddForm);
closeAddFormBtn.addEventListener("click", closeAddForm);
