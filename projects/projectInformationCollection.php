<?php


$projectInformationCollection = array();
array_push($projectInformationCollection, 
    new ProjectInformation(
        "HCM",
        "Halo Checkpoint Manager", 
        new StringArray("C++", "C#", ".NET", "WPF", "MVVM framework", "DirectX", "WinAPI", "DLL injection", "interprocess communication", "Reverse engineering", "Application development", "project architecture", "GUI architecture", "object lifetime management", "open source development", "real-time application", "automated tests"), 
        file_get_contents('markdown/projects/HCM.md'), 
        "https://github.com/Burnt-o/HaloCheckpointManager"
    ),
    new ProjectInformation(
        "CEER",
        "Halo CE Enemy Randomiser", 
        new StringArray("C++", "DirectX", "WinAPI", "DLL injection", "Reverse engineering", "Application development", "project architecture", "GUI architecture", "object lifetime management", "open source development", "real-time application"), 
        file_get_contents('markdown/projects/CEER.md'), 
        "https://github.com/Burnt-o/CEER"
    ),
    new ProjectInformation(
        "com",
        "Maurice-Codes.com", 
        new StringArray("HTML", "CSS", "PHP", "site design", "apache web server", "DNS", "embedded Linux system"), 
        file_get_contents('markdown/projects/Maurice-Codes.md'), 
        "https://github.com/Burnt-o/maurice-codes"
    ),
    new ProjectInformation(
        "autosplitter",
        "MCC Autosplitter", 
        new StringArray("C#", "reverse engineering", "scripting language", "accurate frame-synchronous timing", "collaborative development"), 
        file_get_contents('markdown/projects/MCC Autosplitter.md'), 
        "https://github.com/Burnt-o/MCC_autosplitter"
    )
);


