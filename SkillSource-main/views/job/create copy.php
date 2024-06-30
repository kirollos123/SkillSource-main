<?php redirectIfJobSeeker() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> DApplication </title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />
    
    
    <link rel="stylesheet" href="/assets/libs/choices.js/public//assets/styles/choices.min.css">
    
    <link rel="stylesheet" href="/assets/css/icons.css" />
    <link rel="stylesheet" href="/assets/css/tailwind.css" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    </head>
    <body class="h-full">
    <?php include_once(__DIR__."/../components/nav.php"); ?>

    <form action="/job/store" id="ft-form" class="w-1/2 max-w-fit mt-20" method="POST" accept-charset="UTF-8">
        <fieldset>
          <legend>Create a New Job</legend>
            <label>
                Job title *
                <input type="text" name="Job title" required>
          </label>
        </fieldset>
        <fieldset>
          <legend>Job description</legend>
          <label>
            <textarea name="Description"></textarea>
          </label>
        <fieldset>
          <legend>Job details</legend>
          <div class="two-cols">
            <label>
              Experience *
              <select name="Experience" required>
                <option value="">Select</option>
                <option value="Less than 1 year">Less than 1 year</option>
                <option value="1-3 years">1-3 years</option>
                <option value="3-5 years">3-5 years</option>
                <option value="5+ years">5+ years</option>
              </select>
            </label>
            <label>
              Industry *
              <select name="Industry" required>
                <option value="">Select</option>
                <option value="Technology">Technology</option>
                <option value="Finance">Finance</option>
                <option value="Healthcare">Healthcare</option>
                <option value="Education">Education</option>
              </select>
            </label>
          </div>
          <label>
            Job Location
            <input type="text" name="Location">
          </label>
          <div class="two-cols">
                <label>
            Employee type
            <select name="Employee type">
              <option value="">Select</option>
              <option value="Full-time">Full-time</option>
              <option value="Part-time">Part-time</option>
              <option value="Contract">Contract</option>
              <option value="Freelance">Freelance</option>
            </select>
          </label>
          <label>
            Offer salary
            <input type="text" name="Offer salary">
          </label>
          </div>
          <label>
            Qualifications
            <input type="text" name="Qualifications">
          </label>
          <button type="button" id="addQualification" class="bg-gray-100 p-2 rounded">Add Qualification</button>
          <ul id="QualificationList" class="flex flex-wrap mb-0.5">
          </ul>
          <label>
            Skills
            <input type="text" name="Skills">
          </label>
          <button type="button" id="addSkill" class="bg-gray-100 p-2 rounded">Add Skill</button>
          <ul id="skillList" class="flex flex-wrap mb-0.5">
          </ul>

          <label>
            Position
            <input type="text" name="Position">
          </label>

        </fieldset>
        <div class="btns">
          <!-- <input type="text" name="_gotcha" value="" style="display:none;"> -->
          <input type="submit" value="Create New Job">
        </div>
      </form> 
      <br>
      <br>
    <?php include_once(__DIR__."/../components/scripts.php"); ?>
</body>
</html>