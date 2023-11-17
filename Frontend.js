document.addEventListener('DOMContentLoaded', function() {
    const tableBody = document.querySelector('#dataTable tbody');
    const data = [
        { id: 1, name: 'John Doe', age: 30, city: 'New York' },
        { id: 2, name: 'Jane Smith', age: 25, city: 'Los Angeles' },
    ];

    data.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.id}</td>
            <td>${item.name}</td>
            <td>${item.age}</td>
            <td>${item.city}</td>
        `;
        tableBody.appendChild(row);
    });
});

function setupButton() {
    const button = document.getElementById('Inseration');

    button.addEventListener('mousedown', function() {
        this.classList.add('clicked');
    });

    button.addEventListener('mouseup', function() {
        this.classList.remove('clicked');
    });

    // Also consider the case when the mouse leaves the button while holding down
    button.addEventListener('mouseleave', function() {
        this.classList.remove('clicked');
    });
}


