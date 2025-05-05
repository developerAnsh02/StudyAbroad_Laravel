<section class="section-form">
  <h1>Your Global Education Journey Begins Here!</h1>
  <p style="text-align: center;">Fast-track your student visa process with WTSVISA. Begin in just one step!</p>
  <!-- <button class="hero-button">▶️ See How It Works</button> -->

  <div class="form-box">
    <h2>Instant Apply</h2>
    <p style="text-align: center;">Apply to your dream university</p>

    <div class="tabs">
      <div class="tab active" onclick="showStep(1)">
      <i class="fa fa-globe" aria-hidden="true"></i> Country</div>
      <div class="tab" onclick="showStep(2)">
      <i class="fa-solid fa-book"></i> Course</div>
      <div class="tab" onclick="showStep(3)">
      <i class="fa-solid fa-money-bill"></i> Fees</div>
    </div>

    <form id="stepForm" onsubmit="return validateFinalStep()">
      <!-- Step 1: Country -->
      <div class="form-step active" id="step-1">
        <label for="country">Select Countries (You can choose multiple)</label>
        <select id="country" name="countries[]" multiple class="choices-multiple" required>
          <option value="Canada">Canada</option>
          <option value="USA">USA</option>
          <option value="UK">UK</option>
          <option value="Ireland">Ireland</option>
          <option value="New Zealand">New Zealand</option>
          <option value="Australia">Australia</option>
          <option value="UAE">UAE</option>
          <option value="Singapore">Singapore</option>
          <option value="Malaysia">Malaysia</option>
        </select>
        <button type="button" class="form-btn" onclick="nextStep(1)">Next Step</button>
      </div>

      <!-- Step 2: Course -->
      <div class="form-step" id="step-2">
        <label for="course">Select Course Types (You can choose multiple)</label>
        <select id="course" name="course[]" required>
          <option value="">Choose Course Type</option>
          <option name="Undergraduate" value="Undergraduate">Undergraduate</option>
          <option name="Postgraduate" value="Postgraduate">Postgraduate</option>
        </select>
        <button type="button" class="form-btn" onclick="nextStep(2)">Next Step</button>
      </div>

      <!-- Step 3: Fee -->
      <div class="form-step" id="step-3">
        <label for="feeSelect">Select Fee Budget</label>
        <select id="feeSelect" name="fee" required>
          <option value="">Choose Fee Range</option>
          <option value="5-10L">5L - 10L</option>
          <option value="10-20L">10L - 20L</option>
          <option value="20-30L">20L - 30L</option>
          <option value="30-50L">30L - 50L</option>
          <option value="50-100L">50L - 100L</option>
        </select>
        <button type="button" class="form-btn" onclick="nextStep(3)">Next Step</button>
      </div>

      <!-- Step 4: Extended Info -->
      <div class="form-step" id="step-4">
        <label for="department">Select Departments (You can choose multiple, max 3)</label>
        <select id="department" name="departments[]" multiple class="choices-multiple" required>
          <!-- <option value="MBA">Master of Business Administration (MBA)</option>
          <option value="MA">Master of Arts in Social Work</option>
          <option value="MSc">MSc Advanced Computer Science with Data Science</option>
          <option value="accounting">Accounting</option>
          <option value="MSc">MS in Applied Artificial Intelligence</option>
          <opion value="cyber">Cyber Security and Intelligence</option>
          <option value="data-analytics">Data Analytics</option> -->
        </select>

        <label for="preference">Select Course Preferences (comma separated)</label>
        <input type="text" id="preference" name="preferences" placeholder="e.g., Computer Science, Finance" required>

        <!-- <label for="test">Proficiency Test(s)</label>
        <select id="test" name="test" required>
          <option value="">Choose Test</option>
          <option value="IELTS">IELTS</option>
          <option value="TOEFL">TOEFL</option>
          <option value="PTE">PTE</option>
        </select> -->

        <button type="submit" class="form-btn">Apply Now</button>
      </div>
    </form>
  </div>
</section>

<style>
    .section-form {
      padding: 60px 20px;
      background: #f7f7f7;
      text-align: center;
    }


    .form-box {
      max-width: 600px;
      margin: 0 auto;
      background: #ffffff;
      padding: 20px;
      border-radius: 16px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }

    h1, h2 {
      text-align: center;
      color: #333;
    }

    .hero-button {
      display: block;
      margin: 10px auto 20px;
      padding: 10px 20px;
      border: none;
      background: #ffa500;
      color: #fff;
      border-radius: 25px;
      cursor: pointer;
    }

    .tabs {
      display: flex;
      justify-content: space-around;
      margin-bottom: 20px;
    }

    .tab {
      padding: 10px 15px;
      border-bottom: 2px solid transparent;
      cursor: pointer;
      text-align: center;
    }

    .tab.active {
      border-bottom: 3px solid #ffcc00;
      font-weight: bold;
      color: #ffa500;
    }

    .form-step {
      display: none;
    }

    .form-step.active {
      display: block;
    }

    #stepForm label {
      display: block;
      margin: 15px 0 5px;
      font-weight: bold;
      color: #333;
    }

    #stepForm select,
#stepForm input[type="text"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border-radius: 8px;
  border: 1px solid #ccc;
  font-size: 16px;
}

    .form-btn {
      display: block;
      width: 100%;
      padding: 12px;
      font-size: 16px;
      background: #ffcc00;
      color: #222;
      border: none;
      border-radius: 30px;
      margin-top: 10px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .form-btn:hover {
      background: #ffa500;
    }
  </style>

<script>
let currentStep = 1;

function showStep(step) {
  currentStep = step;
  document.querySelectorAll(".form-step").forEach((el, i) => {
    el.classList.toggle("active", i === step - 1);
  });
  document.querySelectorAll(".tab").forEach((tab, i) => {
    tab.classList.toggle("active", i === step - 1);
  });
}

function nextStep(step) {
  let valid = false;

  if (step === 1) {
    valid = document.getElementById("country").value !== "";
  } else if (step === 2) {
    valid = Array.from(document.getElementById("course").selectedOptions).length > 0;
  } else if (step === 3) {
    valid = document.getElementById("feeSelect").value !== "";
  }

  if (valid) {
    showStep(step + 1);
  } else {
    alert("Please make a valid selection before proceeding.");
  }
}

function validateFinalStep() {
  const dept = document.getElementById("department");
  const pref = document.getElementById("preference").value.trim();
  const test = document.getElementById("test").value;

  // Validate department selection for max 3 options
  if (dept.selectedOptions.length > 3) {
    alert("You can only select up to 3 departments.");
    return false;
  }

  if (!dept.value || !pref || !test) {
    alert("Please fill all the fields before submitting.");
    return false;
  }

  alert("🎉 Application Submitted Successfully!");
  return true;
}

</script>


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const multipleSelects = document.querySelectorAll('.choices-multiple');
    multipleSelects.forEach(select => {
      new Choices(select, {
        removeItemButton: true,
        placeholderValue: 'Select option(s)',
        searchPlaceholderValue: 'Search...',
        maxItemCount: 3, 
      });
    });
  });
</script>
<script>
  const courseSelect = document.getElementById('course');
  const departmentSelect = document.getElementById('department');

  const ugDepartments = [
    { value: 'bsc', text: 'BSc Computer Science' },
    { value: 'ba', text: 'BA Business Management' },
    { value: 'bcom', text: 'BCom Accounting and Finance' },
    { value: 'cyber', text: 'BSc Cyber Security' }
  ];

  const pgDepartments = [
    { value: 'mba', text: 'Master of Business Administration (MBA)' },
    { value: 'ma', text: 'Master of Arts in Social Work' },
    { value: 'msc-ds', text: 'MSc Advanced Computer Science with Data Science' },
    { value: 'ai', text: 'MS in Applied Artificial Intelligence' },
    { value: 'cyber', text: 'Cyber Security and Intelligence' },
    { value: 'analytics', text: 'Data Analytics' }
  ];

  // Initialize Choices.js
  const choices = new Choices(departmentSelect, {
    removeItemButton: true,
    maxItemCount: 3,
    placeholderValue: 'Select up to 3 departments',
    searchPlaceholderValue: 'Search...',
  });

  function updateDepartments(courseType) {
    const departments = courseType === 'Undergraduate' ? ugDepartments : pgDepartments;

    // Clear existing choices
    choices.clearStore();

    // Add new choices
    const newChoices = departments.map(dept => ({
      value: dept.value,
      label: dept.text,
      selected: false,
      disabled: false
    }));
    choices.setChoices(newChoices, 'value', 'label', true);
  }

  courseSelect.addEventListener('change', function () {
    const selected = this.value;
    if (selected === 'Undergraduate' || selected === 'Postgraduate') {
      updateDepartments(selected);
    }
  });
</script>

