<?php
// Simulate team members' data
$teamMembers = [
    [
        'name' => 'Allen Jefferson C. Orcino',
        'role' => 'Assistant Leader',
        'course' => 'BSIT',
        'age' => 21,
        'gender' => 'Male',
        'contact' => '09811732889',
        'address' => '208 Molina St. Purok 6 Alabang Muntinlupa City',
        'image' => 'Assets/len.jpg',
        'github' => 'https://github.com/0rcino',
        'facebook' => 'https://www.facebook.com/allen.14.aj/',
        'linkedin' => 'https://www.linkedin.com/in/allenjefferson-orcino-b82924322/?trk=opento_sprofile_topcard',
        'coursera' => 'https://www.coursera.org/user/fba21b844e5e2a0e91abcb31449b73f1'
    ],
    [
        'name' => 'Jhonrey Kyle C. Lugon',
        'role' => 'Leader',
        'course' => 'BSIT',
        'age' => 22,
        'gender' => 'Male',
        'contact' => '09619669812',
        'address' => 'Baranggay Marcelo Green Village Parañaque City',
        'image' => 'Assets/kyle.jpg',
        'github' => 'https://github.com/Gekyume-31',
        'facebook' => 'https://www.facebook.com/jhonreylugon',
        'linkedin' => 'http://www.linkedin.com/in/jhonreykylelugon',
        'coursera' => 'https://www.coursera.org/learner/kyle'
    ],
    [
        'name' => 'Hannah Grace Traya',
        'role' => 'Member',
        'course' => 'BSIT',
        'age' => 20,
        'gender' => 'Female',
        'contact' => '09510681571',
        'address' => 'Megsha Homeowners Tagle Compound, San Guillermo Street. Putatan, Muntinlupa City.',
        'image' => 'Assets/hannah.jpg',
        'github' => 'https://github.com/hana-tomoe',
        'facebook' => 'https://www.facebook.com/hana.gracia23',
        'linkedin' => 'https://www.linkedin.com/in/hannah-grace-traya-2a4944322',
        'coursera' => 'https://www.coursera.org/learner/hannah-grace-traya-8888'
    ],
    [
        'name' => 'Ian Adrian Porciuncula',
        'role' => 'Member',
        'course' => 'BSIT',
        'age' => 21,
        'gender' => 'Male',
        'contact' => '09515695918',
        'address' => '200 Pedro Diaz St. Muntinlupa City',
        'image' => 'Assets/ian.png',
        'github' => 'https://github.com/Eyan09',
        'facebook' => 'https://www.facebook.com/Eyaaaaan7',
        'linkedin' => 'http://www.linkedin.com/in/ian-adriann-porciuncula-4126b9322',
        'coursera' => 'https://www.coursera.org/user/685d395df259e193d48f1b3eccdba104'
    ],
    // profile 5 
    [
        'name' => 'Lester Plandaño',
        'role' => 'Member',
        'course' => 'BSIT',
        'age' => 20,
        'gender' => 'Male',
        'contact' => '09994531752',
        'address' => ' 19a hyacinth st south Greenheigts village Muntinlupa city',
        'image' => 'Assets/lester.jpg',
        'github' => 'https://github.com/LesterPlandano',
        'facebook' => 'https://www.facebook.com/Lester.Gggggg',
        'linkedin' => 'https://www.linkedin.com/in/lester-planda%C3%B1o-6b86bb322?trk=contact-info',
        'coursera' => 'https://www.coursera.org/user/fba21b844e5e2a0e91abcb31449b73f1'
    ],
];

// Check if a query is sent
if (isset($_GET['q']) && !empty($_GET['q'])) {
    $query = htmlspecialchars($_GET['q']);

    // Filter members based on the query
    $results = array_filter($teamMembers, function($member) use ($query) {
        return stripos($member['name'], $query) !== false;
    });

    if (count($results) > 0) {
        foreach ($results as $member) {
            echo "<div style='border: 1px solid #A5ACB2; padding: 10px; margin: 10px 0;'>";
            echo "<img src='" . htmlspecialchars($member['image']) . "' alt='" . htmlspecialchars($member['name']) . "' style='width:100px;height:100px;'>";
            echo "<p><strong>Name:</strong> " . htmlspecialchars($member['name']) . "</p>";
            echo "<p><strong>Role:</strong> " . htmlspecialchars($member['role']) . "</p>";
            echo "<p><strong>Course:</strong> " . htmlspecialchars($member['course']) . "</p>";
            echo "<p><strong>Contact:</strong> " . htmlspecialchars($member['contact']) . "</p>";
            echo "<p><strong>Address:</strong> " . htmlspecialchars($member['address']) . "</p>";
            echo "<p><a href='" . htmlspecialchars($member['github']) . "'>GitHub</a> | ";
            echo "<a href='" . htmlspecialchars($member['facebook']) . "'>Facebook</a> | ";
            echo "<a href='" . htmlspecialchars($member['linkedin']) . "'>LinkedIn</a> | ";
            echo "<a href='" . htmlspecialchars($member['coursera']) . "'>Coursera</a></p>";
            echo "</div>";
        }
    } else {
        echo "<p>No matching team member found for '" . htmlspecialchars($query) . "'</p>";
    }
}
?>
