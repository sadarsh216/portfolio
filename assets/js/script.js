let coreSkills = [
  {
    name: "HTML",
    percentage: 95
  },
  {
    name: "CSS",
    percentage: 80
  },
  {
    name: "Javascript",
    percentage: 90
  },
  {
    name: "PHP",
    percentage: 70
  },
  {
    name: "React.js",
    percentage: 85
  },
  {
    name: "Node.js",
    percentage: 80
  }
];

this.onload = () => {
  const skill_parent_element = document.querySelector(".skills-progress-items");
  coreSkills.forEach((skill) => {
    let container = document.createElement("div");
    container.classList.add("skill-container");
    let skill_wrapper = document.createElement("div");
    skill_wrapper.classList.add("skill");
    skill_wrapper.style.width = `${skill.percentage}%`;
    let skill_item = document.createElement("div");
    skill_item.classList.add("row", "justify-between");
    let skill_name = document.createElement("div");
    skill_name.classList.add("col");
    skill_name.innerText = skill.name;
    let skill_percentage = document.createElement("div");
    skill_percentage.classList.add("col");
    skill_percentage.innerText = `${skill.percentage}%`;
    skill_item.appendChild(skill_name);
    skill_item.appendChild(skill_percentage);
    skill_wrapper.appendChild(skill_item);
    container.appendChild(skill_wrapper);
    skill_parent_element.appendChild(container);
  });
};
