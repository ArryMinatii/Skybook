const container = document.getElementById("queryContainer");

function renderQueries(category = "All") {
    container.innerHTML = "";
    
    const filtered = category === "All" 
        ? queries 
        : queries.filter(q => q.category === category);

    filtered.forEach(query => {
        container.innerHTML += `
            <div class="advanced-query-card">
                <div class="query-icon">
                    <i class="fa-solid ${getFontAwesomeIcon(query.icon)}"></i>
                </div>
                <h3>${query.title}</h3>
                <p>${query.description}</p>
                <div class="query-actions">
                    <button onclick="openModal(${query.id})">
                        <i class="fa-solid fa-play"></i> Run Query
                    </button>
                    <button class="preview-btn btn" onclick="openModal(${query.id})">
                        <i class="fa-solid fa-code"></i> View SQL
                    </button>
                </div>
            </div>
        `;
    });
}

// Map old emoji icons to modern Font Awesome classes
function getFontAwesomeIcon(emoji) {
    switch(emoji) {
        case "✈": return "fa-plane";
        case "🛫": return "fa-plane-departure";
        case "🛬": return "fa-plane-arrival";
        case "📘": return "fa-ticket";
        case "👤": return "fa-user";
        case "🌍": return "fa-globe";
        case "🏢": return "fa-building-columns";
        case "👨": return "fa-user-tie";
        case "🏆": return "fa-trophy";
        case "⏰": return "fa-clock";
        case "🌎": return "fa-earth-americas";
        case "🧮": return "fa-calculator";
        case "📈": return "fa-chart-line";
        case "🚫": return "fa-ban";
        case "📅": return "fa-calendar-days";
        case "🅰": return "fa-font";
        default: return "fa-database";
    }
}

// Initial Render
renderQueries("All");

function openModal(id) {
    const query = queries.find(q => q.id === id);
    if (!query) return;

    document.getElementById("queryModal").style.display = "flex";
    document.getElementById("modalTitle").innerText = query.title;
    document.getElementById("modalSQL").innerText = query.sql;

    const table = document.getElementById("resultTable");
    table.innerHTML = "";

    // Header
    let headerRow = "<thead><tr>";
    query.headers.forEach(head => {
        headerRow += `<th>${head}</th>`;
    });
    headerRow += "</tr></thead>";
    table.innerHTML += headerRow;

    // Body
    let bodyRows = "<tbody>";
    query.rows.forEach(row => {
        bodyRows += "<tr>";
        row.forEach(col => {
            bodyRows += `<td>${col}</td>`;
        });
        bodyRows += "</tr>";
    });
    bodyRows += "</tbody>";
    table.innerHTML += bodyRows;
}

function closeModal() {
    document.getElementById("queryModal").style.display = "none";
}