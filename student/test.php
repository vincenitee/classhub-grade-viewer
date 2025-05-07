<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle Tab Pane with Nav Pills</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-3">
    <!-- Nav pills navigation -->
    <ul class="nav nav-pills" id="myPills" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-pill" data-bs-toggle="pill" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-pill" data-bs-toggle="pill" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-pill" data-bs-toggle="pill" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
        </li>
    </ul>

    <!-- Tab content -->
    <div class="tab-content" id="myPillsContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-pill">
            <p>This is the Home content.</p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-pill">
            <p>This is the Profile content.</p>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-pill">
            <p>This is the Contact content.</p>
        </div>
    </div>

    <!-- Buttons outside of navigation to toggle pills -->
    <div class="mt-3">
        <button class="btn btn-primary" id="showHome">Go to Home</button>
        <button class="btn btn-secondary" id="showProfile">Go to Profile</button>
        <button class="btn btn-success" id="showContact">Go to Contact</button>
    </div>
</div>

<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    // JavaScript to manually trigger pill switching
    function togglePill(pillId) {
      console.log(document.querySelector(pillId));
        let targetPill = new bootstrap.Tab(document.querySelector(pillId));
        targetPill.show();  // Activates the specified pill
    }

    // Event listeners for the buttons to switch pills
    document.getElementById('showHome').addEventListener('click', function() {
        togglePill('#home-pill');  // Switches to Home pill
    });

    document.getElementById('showProfile').addEventListener('click', function() {
        togglePill('#profile-pill');  // Switches to Profile pill
    });

    document.getElementById('showContact').addEventListener('click', function() {
        togglePill('#contact-pill');  // Switches to Contact pill
    });
</script>

</body>
</html>
