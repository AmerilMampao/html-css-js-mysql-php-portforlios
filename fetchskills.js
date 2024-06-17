
// document.addEventListener("DOMContentLoaded", () => {
//     // Path to your JSON file
//     const jsonPath = './assets/data/skills.json';

//     fetch(jsonPath)
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error("Network response was not ok " + response.statusText);
//             }
//             return response.json();
//         })
//         .then(data => {
//             const skillsContainer = document.getElementById('skillsContainer');
//             data.skills.forEach(skill => {
//                 // Create a div for each skill
//                 const skillDiv = document.createElement('div');
//                 skillDiv.classList.add('skill');

//                 // Create an img element for the icon
//                 const icon = document.createElement('img');
//                 icon.src = skill.icon;
//                 icon.alt = `${skill.name} icon`;

//                 // Create a span for the skill name
//                 const skillName = document.createElement('span');
//                 skillName.textContent = skill.name;

//                 // Append icon and name to the skill div
//                 skillDiv.appendChild(icon);
//                 skillDiv.appendChild(skillName);

//                 // Append the skill div to the container
//                 skillsContainer.appendChild(skillDiv);
//             });
//         })
//         .catch(error => {
//             console.error("Error fetching the JSON data: ", error);
//         });
// });
