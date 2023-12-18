const getID = document.querySelector(".recept");

//Detta script hämtar och spottar ut data till ett enkillt recept
fetch("../json/recept.json")
  .then((response) => response.json())
  .then((data) => {
    data.forEach((item) => {
      if (item.id == getID.id) {
        console.log(item);
        let figure = document.createElement("figure");
        let img = document.createElement("img");
        let ol = document.createElement("ol");
        let ul = document.createElement("ul");
        let header = document.createElement("header");
        let h1 = document.createElement("h1");
        let p = document.createElement("p");
        let h2G = document.createElement("h2");
        let h2I = document.createElement("h2");
        let section1 = document.createElement("section");
        let section2 = document.createElement("section");
        let section4 = document.createElement("section");
        let bigBox = document.createElement("div");
        let timeCategoty = document.createElement("section");
        let time = document.createElement("span");
        let portion = document.createElement("span");
        let buyIngredients = document.createElement("span");
        let amountIngredients = item.ingredients.length;
        //! icon from google symbols
        let timeIcon = document.createElement("span");
        let ingridentsIcon = document.createElement("span");
        let portionsIcon = document.createElement("span");
        //! Div box till tid och ikon
        let timebox = document.createElement("div");
        //! Div box till ingredinser och ikon
        let ingridentsBox = document.createElement("div");
        //! Div box till portioner och ikon
        let portionsBox = document.createElement("div");
        //! Div box till heading, figure och info-recipie
        let section3 = document.createElement("div");
        let cred = document.createElement("a");

        switch (item.source) {
          case "instagram":
            cred.classList.add("cred-instagram");
            cred.href = `https://www.instagram.com/${item.credURL}/`;
            cred.textContent = "Länk till orginalreceptet, Instagram";
            break;

          case "ica":
            cred.classList.add("cred-ica");
            cred.href = `https://www.ica.se/${item.credURL}/`;
            cred.textContent = "Länk till orginalreceptet, ICA";
            break;

          case "arla":
            cred.classList.add("cred-arla");
            cred.href = `https://www.arla.se/${item.credURL}/`;
            cred.textContent = "Länk till orginalreceptet, Arla";
            break;

          default:
            cred.classList.add("cred-default");
            cred.href = "#";
            cred.textContent = "Länk till orginalrecept";
            break;
        }

        //! CLASSES
        timebox.classList.add("time-box");
        ingridentsBox.classList.add("ingridients-box");
        portionsBox.classList.add("portion-box");
        h1.classList.add("recipe-heading");
        time.classList.add("time-recipe");
        portion.classList.add("portion-meal");
        section3.classList.add("section3");
        section4.classList.add("howToMake");
        buyIngredients.classList.add("class", "buy-ingredients");
        p.classList.add("info-recipe");
        section1.classList.add("steps-container");
        section2.classList.add("steps-container", "howToContainer");
        timeCategoty.classList.add("time-ingredients-container");
        ul.classList.add("steps-list");
        ol.classList.add("steps-list-howTo");
        //! icon from google symbols
        timeIcon.classList.add("material-symbols-outlined");
        ingridentsIcon.classList.add("material-symbols-outlined");
        portionsIcon.classList.add("material-symbols-outlined");
        bigBox.classList.add("bigBox");

        h1.textContent = item.name;
        p.textContent = item.description;
        time.textContent = item.time;
        portion.textContent = item.portions;
        buyIngredients.textContent = `${amountIngredients} ingredienser`;
        h2G.textContent = "Gör så här";
        h2I.textContent = "Ingredienser";
        timeIcon.textContent = "schedule";
        ingridentsIcon.textContent = "local_pizza";
        portionsIcon.textContent = "restaurant";
        img.setAttribute("src", item.imageURL);
        img.setAttribute("srcset", `${item.image400} 400w`);
        img.setAttribute("srcset", `${item.image800} 800w`);
        img.setAttribute("srcset", `${item.imageURL} 1200w`);
        img.setAttribute("alt", `${item.altText}`);
        figure.setAttribute("class", "recept-img");
        console.log(item.ingredients.length);
        // Checkboxes for each step
        let checkboxes = document.createElement("li");
        // Create a container for checkboxes
        checkboxes.classList.add("checkBoxContainer");
        let checkBoxLi = document.createElement("ul");
        checkBoxLi.id = "list";
        item.steps.forEach((step, index) => {
          let checkboxes2 = document.createElement("li"); // Create a container for checkboxes
          checkboxes2.classList.add("checkBoxContainer");
          let checkboxLabel = document.createElement("label"); // Create a label element
          let checkbox = document.createElement("input"); // Create an input element
          checkboxLabel.classList.add("steps-list-howTo");
          checkbox.type = "checkbox"; // Set the input type to 'checkbox'
          checkbox.id = `step${index}`; // Assign a unique ID to the checkbox
          checkbox.name = "recipeSteps"; // Set the name attribute for the group
          checkbox.value = step; // Set the value attribute to the step text
          checkboxLabel.htmlFor = `step${index}`; // Associate the label with the checkbox
          checkboxLabel.textContent = step; // Set the label text to the step text
          checkboxes2.appendChild(checkbox); // Append the checkbox to the container
          checkboxes2.appendChild(checkboxLabel); // Append the label to the container
          checkBoxLi.appendChild(checkboxes2);
        });
        item.ingredients.forEach((ingrident) => {
          let li = document.createElement("li");
          console.log(ingrident);
          li.textContent = `${ingrident.quantity}  ${ingrident.name}`;
          ul.append(li);
        });
        //!APPEND
        timebox.append(timeIcon, time);
        ingridentsBox.append(ingridentsIcon, buyIngredients);
        portionsBox.append(portionsIcon, portion);
        timeCategoty.append(timebox, ingridentsBox, portionsBox);
        section3.append(header, figure, timeCategoty, p, cred);
        section4.append(section1, section2);
        bigBox.append(section3, section4);
        section1.append(h2I, ul); // Append checkboxes to the "Ingredienser" section
        section2.append(h2G, ol, checkBoxLi);
        figure.append(img);
        header.append(h1);
        getID.append(bigBox);
      }
    });
  });
