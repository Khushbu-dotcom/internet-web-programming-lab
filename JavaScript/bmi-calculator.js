let heightInches = 65;
let weightPounds = 150;

// Convert
let heightMeters = heightInches * 0.0254;
let weightKg = weightPounds * 0.453592;

// BMI
let bmi = weightKg / (heightMeters ** 2);

console.log("BMI:", bmi);