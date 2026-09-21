"use strict";

const dog = {
    name: "Buddy",
    age: 3,
    breed: "Golden Retriever",
    hairColor: "brown",
    family: {
        mother: "Luna",
        father: "Max"
    },
    sleep: function() {
        alert(`${this.name} is sleeping.`);
    },
    eat: function() {
        alert(`${this.name} is eating.`);
    },
    bark: function() {
        alert(`${this.name} is barking.`);
    },
    givePaw: function() {
        alert(`${this.name} gives you a paw.`);
    }
};

    dog.age += 1;  
    dog.houseTrained = false;

    console.log(dog);

    document.getElementById("dog").innerHTML = `Hello, my name is ${dog.name}. I am a very cute ${dog.age} year old ${dog.breed} my fur is ${dog.hairColor} hair. My mother is ${dog.family.mother} and my father is ${dog.family.father}.`;

    dog.eat();
    dog.bark();