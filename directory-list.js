// Get the directory path
const dirPath = '.'; // Change this to your desired directory path

// Get the directory entries
const dirEntries = [];
for (let entry of window.DIRECTORY.entries(dirPath)) {
    if (entry.isDirectory) {
        dirEntries.push(entry.name);
    }
}

// Create the list
const directoryList = document.getElementById('directory-list');
for (let dir of dirEntries) {
    const listItem = document.createElement('li');
    listItem.textContent = dir;
    directoryList.appendChild(listItem);
}
