<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>আমারফসল - Payment System</title>
<script src="https://cdn.tailwindcss.com"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
  body { font-family: 'Noto Sans Bengali', sans-serif; background-color: #f7f7f7; }
  .payment-card { transition: transform 0.3s, box-shadow 0.3s; }
  .payment-card:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
  .method-btn.active { border-color: #16a34a; background-color: #dcfce7; }
  .otp-input { width:3rem; height:3rem; text-align:center; font-size:1.5rem; border:1px solid #ccc; border-radius:0.5rem; }
</style>
</head>
<body class="p-6">

<main class="max-w-md mx-auto space-y-6">

  <h1 class="text-3xl font-bold text-emerald-700 text-center mb-6">💰 পেমেন্ট সিস্টেম</h1>

  <div class="bg-white p-6 rounded-xl shadow payment-card space-y-4">

    <!-- Payment Form -->
    <form id="paymentForm" action="{{ route('payment.store') }}" method="POST">
      @csrf

      <!-- Amount -->
      <div class="mb-4">
        <label class="block text-gray-700 mb-1">পেমেন্টের পরিমাণ (৳)</label>
        <input type="number" name="amount" id="amount" placeholder="টাকার পরিমাণ লিখুন" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-emerald-400" required>
      </div>

      <!-- Mobile Number -->
      <div class="mb-4">
        <label class="block text-gray-700 mb-1">মোবাইল নাম্বার</label>
        <input type="tel" name="mobile" id="mobile" placeholder="01XXXXXXXXX" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-emerald-400" required>
      </div>

      <!-- Payment Method -->
      <div class="mb-4">
        <p class="text-gray-700 mb-2">পেমেন্ট পদ্ধতি</p>
        <div class="flex gap-3">
          <button type="button" class="method-btn border p-3 rounded-lg flex-1 flex items-center justify-center gap-2 hover:bg-emerald-50" data-method="Bkash">Bkash</button>
          <button type="button" class="method-btn border p-3 rounded-lg flex-1 flex items-center justify-center gap-2 hover:bg-emerald-50" data-method="Nagad">Nagad</button>
          <button type="button" class="method-btn border p-3 rounded-lg flex-1 flex items-center justify-center gap-2 hover:bg-emerald-50" data-method="Upay">Upay</button>
        </div>
        <input type="hidden" name="method" id="selectedMethodInput" required>
      </div>

      <!-- OTP Section -->
      <div id="otpSection" class="hidden space-y-3">
        <label class="block text-gray-700">6-ডিজিট OTP দিন</label>
        <div class="flex justify-center gap-2">
          <input type="text" maxlength="1" class="otp-input" />
          <input type="text" maxlength="1" class="otp-input" />
          <input type="text" maxlength="1" class="otp-input" />
          <input type="text" maxlength="1" class="otp-input" />
          <input type="text" maxlength="1" class="otp-input" />
          <input type="text" maxlength="1" class="otp-input" />
        </div>
        <div class="text-center">
          <button type="button" id="verifyBtn" class="px-6 py-2 bg-emerald-500 text-white rounded-lg hover:bg-emerald-600 font-semibold">OTP যাচাই করুন</button>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="flex gap-3 mt-4">
        <button type="button" id="payBtn" class="flex-1 bg-emerald-600 text-white p-3 rounded-lg hover:bg-emerald-700">💸 পেমেন্ট করুন</button>
        <button type="button" id="cancelBtn" class="flex-1 border border-gray-300 p-3 rounded-lg hover:bg-gray-100">❌ বাতিল</button>
      </div>

    </form>
  </div>

  <!-- Confirmation Message -->
  <div id="confirmation" class="hidden bg-emerald-50 border border-emerald-300 p-4 rounded-lg text-emerald-800 text-center font-semibold">
    🎉 পেমেন্ট সফল হয়েছে!
  </div>

  @if(session('success'))
    <div class="bg-emerald-50 border border-emerald-300 p-4 rounded-lg text-emerald-800 text-center font-semibold">
      🎉 {{ session('success') }}
    </div>
  @endif

</main>

<script>
let selectedMethod = null;
const methodBtns = document.querySelectorAll('.method-btn');
const payBtn = document.getElementById('payBtn');
const cancelBtn = document.getElementById('cancelBtn');
const otpSection = document.getElementById('otpSection');
const verifyBtn = document.getElementById('verifyBtn');
const confirmation = document.getElementById('confirmation');
const otpInputs = document.querySelectorAll('.otp-input');
const selectedMethodInput = document.getElementById('selectedMethodInput');
const paymentForm = document.getElementById('paymentForm');

// Payment Method Selection
methodBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    methodBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    selectedMethod = btn.dataset.method;
    selectedMethodInput.value = selectedMethod;
  });
});

// Show OTP Section
payBtn.addEventListener('click', () => {
  const amount = document.getElementById('amount').value;
  const mobile = document.getElementById('mobile').value;

  if (!amount || !mobile || !selectedMethod) {
    alert('সকল ফিল্ড পূরণ করুন এবং পেমেন্ট পদ্ধতি নির্বাচন করুন।');
    return;
  }

  otpSection.classList.remove('hidden');
  payBtn.disabled = true;
});

// Verify OTP and submit form
verifyBtn.addEventListener('click', () => {
  let otp = '';
  otpInputs.forEach(input => otp += input.value);

  if (otp.length === 6) {
    otpSection.classList.add('hidden');
    confirmation.classList.remove('hidden');

    // Submit the form after OTP verification
    paymentForm.submit();
  } else {
    alert('দয়া করে 6-ডিজিট OTP দিন।');
  }
});

// Auto focus next input
otpInputs.forEach((input, index) => {
  input.addEventListener('input', () => {
    if(input.value.length === 1 && index < otpInputs.length - 1){
      otpInputs[index+1].focus();
    }
  });
});

// Cancel Button
cancelBtn.addEventListener('click', () => {
  document.getElementById('amount').value = '';
  document.getElementById('mobile').value = '';
  methodBtns.forEach(b => b.classList.remove('active'));
  selectedMethod = null;
  selectedMethodInput.value = '';
  otpInputs.forEach(i => i.value = '');
  otpSection.classList.add('hidden');
  confirmation.classList.add('hidden');
  payBtn.disabled = false;
});
</script>

</body>
</html>
