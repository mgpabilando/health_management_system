@extends('layouts.home')

@section('content')
<div class="container-fluid">
{{-- 
    <div class="row">
    <div class="col-md-12 d-flex flex-row align-items-center justify-content-between header">
        <div class=" d-flex flex-row align-items-center title">
        <img src="images/macawayan logo.png" alt="irosin logo">
        <p class="navbar-brand">BMHMS</p>
        </div>
        <div class="d-flex position-relative align-items-center account">
        <p class="flex-shrink-1 user-name"><u>Juan Dela Cruz</u><br>NURSE</P>
        <img src="images/profile.jpeg" alt="">
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-3 sidebar">
        <div class="d-grid flex-column menu-sidebar">
        <a class="active" href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Purok</a>
        <a href="#"><i class="fas fa-child"></i>Family Numbering</a>
        <a href="#"><i class="fas fa-capsules"></i>Medicine Request</a>
        <a href="#"><i class="fas fa-file-alt"></i>Reports</a>
        <a href="#"><i class="fas fa-address-card"></i>Manage Account</a>
        </div>
        <div class="position-relative d-grid flex-column log-out">
        <a href="index.php" class="log-out"><i class="fas fa-sign-out-alt"></i>Log Out</a>
        </div>
    </div>
    <div class="col-md-9 content">
        <div class="dashboard-menu">
        <a href="resident_profile.php"><i class="fas fa-id-badge"></i><br>Resident Profile</a>
        <a href="health_consultation.php"><i class="fas fa-heartbeat"></i><br>Health Consultation</a>
        <a href="event_db.php"><i class="fas fa-calendar-alt"></i><br>Events</a>
        </div>
        <hr>
        <div clas=" total-db">
        <div class="total-resident">
            <p class="total">0</p>
            <p class="totsl-res"> Total Resident </p>
        </div>
        <div class="total-resident">
            <p class="total">0</p>
            <p class="totsl-res"> Total Head Family </p>
        </div>
        <div class="total-resident">
            <p class="total">0</p>
            <p class="totsl-res"> Total Consultation </p>
        </div>
        </div>
    </div>
    </div>--}}
</div> 
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)

    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
        // show navbar
        nav.classList.toggle('show')
        // change icon
        toggle.classList.toggle('bx-x')
        // add padding to body
        bodypd.classList.toggle('body-pd')
        // add padding to header
        headerpd.classList.toggle('body-pd')
        })
    }
    }

    showNavbar('header-toggle','nav-bar','body-pd','header')

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink(){
        if(linkColor){
        linkColor.forEach(l=> l.classList.remove('active'))
        this.classList.add('active')
        }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
// Your code to run since DOM is loaded and ready
    });

 </script>