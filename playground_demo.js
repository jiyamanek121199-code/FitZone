/**
 * Playground Demo Script
 * Just a simple script to demonstrate some JavaScript logic.
 */

const welcomeMessage = (name) => {
    const greeting = `Hello, ${name}! Welcome to the playground.`;
    console.log(
        "%c" + greeting,
        "color: #00ffcc; font-weight: bold; font-size: 20px;",
    );
};

const calculateSum = (a, b) => {
    return a + b;
};

// Execute a small demo
welcomeMessage("Developer");
console.log("The sum of 5 and 10 is:", calculateSum(5, 10));

const items = ["Gym", "Fitness", "Strength", "Health"];
const uppercaseItems = items.map((item) => item.toUpperCase());
console.table(uppercaseItems);
