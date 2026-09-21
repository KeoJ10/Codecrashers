"use strict";

const dog = {
    name: "Buddy",
    age: 3,
    breed: "Golden Retriever",
    hairColor: "brown"
};

    dog.age += 1;  
    dog.houseTrained = false;

    console.log(dog);

    document.getElementById("dog").innerHTML = `Hello, my name is ${dog.name}. I am a very cute ${dog.age} year old ${dog.breed} my fur is ${dog.hairColor} hair.`;