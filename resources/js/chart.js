import Chart from 'chart.js';

// Function to fetch student data from API
async function fetchStudentData() {
    try {
        const response = await fetch('/api/students');
        if (!response.ok) {
            throw new Error('Failed to fetch student data');
        }
        const data = await response.json();
        return data;
    } catch (error) {
        console.error(error);
    }
}

// Function to create a chart
function createChart(data) {
    const ctx = document.getElementById('studentChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: data.map(student => student.name),
            datasets: [{
                label: 'Grades',
                data: data.map(student => student.grade),
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
            }],
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
}

// Fetch student data and create chart
fetchStudentData()
    .then(data => createChart(data))
    .catch(error => console.error(error));
