"use strict";

const menuList = document.querySelector(".menu__list");
const menuListTitles = [...document.querySelectorAll(".menu__list_title")];
const menuSubLists = [...document.querySelectorAll(".menu__sub_list")];
const menuListItems = [...document.querySelectorAll(".menu__list_item")];
const addNoteBtn = document.querySelector(".menu_add_btn");
const addNoteForm = document.querySelector(".content__form_area");
const closeAddFormBtn = document.querySelector(".content__form_close_btn");

const removeClasses = function (classLists, classToRemove) {
  classLists.forEach((e) => {
    e.classList.remove(classToRemove);
  });
};

const addClass = function (targetElement, classToAdd) {
  targetElement.classList.add(classToAdd);
};

const toggleNoteList = function (e) {
  const target = e.target.closest(".menu__list_title");

  if (!target) return;
  const targetParentEl = target.parentElement;
  if (targetParentEl.classList.contains("open")) {
    return targetParentEl.classList.remove("open");
  }
  console.log({ target, targetParentEl });
  removeClasses(menuListItems, "open");
  targetParentEl.classList.toggle("open");
};

const closeAddForm = function () {
  addNoteForm.classList.add("hidden");
};

const showAddForm = function () {
  addNoteForm.classList.remove("hidden");
};

menuList.addEventListener("click", toggleNoteList);
addNoteBtn.addEventListener("click", showAddForm);
closeAddFormBtn.addEventListener("click", closeAddForm);
