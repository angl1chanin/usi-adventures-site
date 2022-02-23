const header = document.querySelectorAll("#header__title-text path");

for (let i = 0; i < header.length; i++) {
    console.log(`letter ${i} is ${header[i].getTotalLength()}`);
}