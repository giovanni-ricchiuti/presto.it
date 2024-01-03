import './bootstrap';
import 'bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    var dropdownItems = document.querySelectorAll('.dropdown-item');

    dropdownItems.forEach(function (item) {
        item.addEventListener('click', function () {
            var selectedOption = item.textContent;
            document.querySelector('.dropdown-toggle').textContent = selectedOption;
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    function sortList() {
        var order = document.getElementById("order").value;
        var category = document.getElementById("category_id").value;

        var url = '/announcements';

        if (order) {
            url += '?order=' + order;
        }

        if (category) {
            url += (order ? '&' : '?') + 'category=' + category;
        }

        window.location.href = url;
    }

    document.getElementById('order').addEventListener('change', sortList);
});

// Home-slider-category

const slider = document.querySelector('.slider');

function activate(e) {
  const items = document.querySelectorAll('.item');
  e.target.matches('.next') && slider.append(items[0])
  e.target.matches('.prev') && slider.prepend(items[items.length-1]);
}

document.addEventListener('click',activate,false);

// Article-slider-img

const els = document.querySelectorAll("[type='radio']");
for (const el of els)
  el.addEventListener("input", e => reorder(e.target, els));
reorder(els[0], els);

function reorder(targetEl, els) {
  const nItems = els.length;
  let processedUncheck = 0;
  for (const el of els) {
    const containerEl = el.nextElementSibling;
    const labelEl = containerEl.parentElement; // added this line to get the parent label element
    if (el === targetEl) { // checked radio
      containerEl.style.setProperty("--w", "100%");
      containerEl.style.setProperty("--l", "0");
      labelEl.style.setProperty("left", "0"); // added this line to adjust the label position
    } else { // unchecked radios
      containerEl.style.setProperty("--w", `${100 / (nItems - 1)}%`);
      containerEl.style.setProperty("--l", `${processedUncheck * 100 / (nItems - 1)}%`);
    //   labelEl.style.setProperty("left", `${processedUncheck * 100 / (nItems - 1)}%`); // added this line to adjust the label position
      processedUncheck += 1;
    }
  }
}