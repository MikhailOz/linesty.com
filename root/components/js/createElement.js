function createElement(tagName, attributes = {}) {
    const element = document.createElement(tagName);
    Object.entries(attributes).forEach(([key, value]) => {
      element.setAttribute(key, value);
    });
    return element;
}
  
function createSvgElement(tagName, attributes = {}) {
    const svgNamespace = 'http://www.w3.org/2000/svg';
    const element = document.createElementNS(svgNamespace, tagName);
    Object.entries(attributes).forEach(([key, value]) => {
      element.setAttribute(key, value);
    });
    return element;
}
  
function addClasses(element, classNames = []) {
    classNames.forEach(className => {
      element.classList.add(className);
    });
}