<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>আমারফসল - Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  body { font-family: 'Noto Sans Bengali', sans-serif; background-color: #f7f7f7; }
  .modal { display: none; position: fixed; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index:50; }
  .modal.active { display: flex; }
  .modal-content { background:#fff; padding:2rem; border-radius:1rem; width:90%; max-width:600px; max-height:90vh; overflow-y:auto; box-shadow:0 10px 25px rgba(0,0,0,0.2); }
  label { font-weight: 600; }
</style>
</head>
<body class="p-6">

<main class="max-w-7xl mx-auto">
  <h1 class="text-3xl font-bold text-emerald-700 mb-6 text-center">📊 আমাদের ফার্মার প্রোডাক্ট ড্যাশবোর্ড</h1>

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white rounded-lg shadow-lg">
      <thead>
        <tr class="bg-emerald-100 text-emerald-900 font-semibold">
          <th class="py-3 px-4 text-left">পণ্যের নাম</th>
          <th class="py-3 px-4 text-left">শ্রেণী</th>
          <th class="py-3 px-4 text-left">Market দাম (৳)</th>
          <th class="py-3 px-4 text-left">আমাদের দাম (৳)</th>
          <th class="py-3 px-4 text-left">Book Now</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">

        <!-- Existing products -->
        <tr><td class="py-2 px-4">বীজ 🌾</td><td>কৃষি পণ্য</td><td>500</td><td>450</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">কৃষি সার 💊</td><td>কৃষি পণ্য</td><td>1200</td><td>1000</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">পাটের খড় 🌿</td><td>ফার্ম সামগ্রী</td><td>300</td><td>270</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">ট্রাক্টর 🚜</td><td>ফার্ম ইকুইপমেন্ট</td><td>1500000</td><td>1400000</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">হ্যান্ড ট্রলি 🛒</td><td>ফার্ম ইকুইপমেন্ট</td><td>2500</td><td>2300</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>

        <!-- 15+ new products -->
        <tr><td class="py-2 px-4">হর্টিকালচার নেট 🪴</td><td>ফার্ম সামগ্রী</td><td>400</td><td>350</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">ফসল রক্ষাকারী জাল 🛡️</td><td>ফার্ম সামগ্রী</td><td>600</td><td>550</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">হ্যান্ড হেক 🪓</td><td>ফার্ম ইকুইপমেন্ট</td><td>1200</td><td>1100</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">সেচের পাইপ 💧</td><td>ফার্ম সামগ্রী</td><td>800</td><td>700</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">কৃষি স্প্রে 💦</td><td>ফার্ম ইকুইপমেন্ট</td><td>1500</td><td>1350</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">হ্যান্ড সিক scythe 🔪</td><td>ফার্ম ইকুইপমেন্ট</td><td>900</td><td>800</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">প্লাস্টিক টব 🪣</td><td>ফার্ম সামগ্রী</td><td>250</td><td>220</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">হ্যান্ড ল্যান্ড প্লাউ 🌾</td><td>ফার্ম ইকুইপমেন্ট</td><td>2000</td><td>1800</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">বেগুনি বীজ 🌱</td><td>কৃষি পণ্য</td><td>600</td><td>550</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">সেচের মোটর ⚡</td><td>ফার্ম ইকুইপমেন্ট</td><td>5000</td><td>4700</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">কম্বাইন হারভেস্টার 🚜</td><td>ফার্ম ইকুইপমেন্ট</td><td>1200000</td><td>1150000</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">ট্রলি হুইল 🛞</td><td>ফার্ম সামগ্রী</td><td>350</td><td>320</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>
        <tr><td class="py-2 px-4">হ্যান্ড স্পেড 🌱</td><td>ফার্ম ইকুইপমেন্ট</td><td>1500</td><td>1400</td><td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button></td></tr>

      </tbody>
    </table>
  </div>
</main>

<!-- Modal -->
<div id="bookModal" class="modal">
  <div class="modal-content">
    <h2 class="text-2xl font-bold text-emerald-700 mb-4 text-center">📌 Book Now</h2>
    <form id="bookForm" class="space-y-4">

      <div>
        <label for="mobile">মোবাইল নাম্বার</label>
        <input type="tel" id="mobile" name="mobile" placeholder="01XXXXXXXXX" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg">
      </div>

      <div>
        <label for="pickupDate">কবে নিতে চাও</label>
        <input type="date" id="pickupDate" name="pickupDate" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg">
      </div>

      <div>
        <label for="returnDate">কবে ফেরত দিবে</label>
        <input type="date" id="returnDate" name="returnDate" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg">
      </div>

      <div class="grid grid-cols-1 gap-4">
        <div>
          <label for="division">Division</label>
          <select id="division" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg">
            <option value="">-- Division নির্বাচন করুন --</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Chattogram">Chattogram</option>
            <option value="Khulna">Khulna</option>
            <option value="Barishal">Barishal</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Mymensingh">Mymensingh</option>
          </select>
        </div>

        <div>
          <label for="district">জেলা</label>
          <select id="district" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg">
            <option value="">-- জেলা নির্বাচন করুন --</option>
          </select>
        </div>

        <div>
          <label for="house">House No</label>
          <input type="text" id="house" placeholder="House No" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg">
        </div>

        <div>
          <label for="road">Road No</label>
          <input type="text" id="road" placeholder="Road No" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg">
        </div>
      </div>

      <button type="submit" class="w-full bg-emerald-600 text-white font-semibold p-2 rounded-lg mt-4 hover:bg-emerald-700 transition">Submit</button>
      <button type="button" id="closeModal" class="w-full bg-gray-300 text-gray-700 font-semibold p-2 rounded-lg mt-2 hover:bg-gray-400 transition">Close</button>
    </form>
  </div>
</div>

<script>
  const divisionSelect = document.getElementById('division');
  const districtSelect = document.getElementById('district');
  const divisionDistricts = {
    "Dhaka": ["Dhaka","Faridpur","Gazipur","Gopalganj","Jamalpur","Kishoreganj","Madaripur","Manikganj","Munshiganj","Narayanganj","Narsingdi","Netrokona","Rajbari","Shariatpur","Sherpur","Tangail"],
    "Chattogram": ["Bandarban","Brahmanbaria","Chandpur","Chattogram","Cox's Bazar","Cumilla","Feni","Khagrachhari","Lakshmipur","Noakhali","Rangamati"],
    "Khulna": ["Bagerhat","Chuadanga","Jashore","Jhenaidah","Khulna","Kushtia","Magura","Meherpur","Narail","Satkhira"],
    "Barishal": ["Barguna","Barishal","Bhola","Jhalokati","Patuakhali","Pirojpur"],
    "Sylhet": ["Habiganj","Moulvibazar","Sunamganj","Sylhet"],
    "Rajshahi": ["Bogura","Jaipurhat","Naogaon","Natore","Chapainawabganj","Pabna","Rajshahi","Sirajganj"],
    "Rangpur": ["Rangpur","Dinajpur","Kurigram","Gaibandha","Thakurgaon","Panchagarh","Nilphamari","Lalmonirhat","Kamalganj"],
    "Mymensingh": ["Jamalpur","Mymensingh","Netrokona","Sherpur"]
  };

  divisionSelect.addEventListener('change', () => {
    const selectedDivision = divisionSelect.value;
    districtSelect.innerHTML = '<option value="">-- জেলা নির্বাচন করুন --</option>';
    if(selectedDivision && divisionDistricts[selectedDivision]){
      divisionDistricts[selectedDivision].forEach(district => {
        const option = document.createElement('option');
        option.value = district;
        option.textContent = district;
        districtSelect.appendChild(option);
      });
    }
  });

  const modal = document.getElementById('bookModal');
  const bookBtns = document.querySelectorAll('.bookBtn');
  const closeModal = document.getElementById('closeModal');

  bookBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      modal.classList.add('active');
    });
  });

  closeModal.addEventListener('click', () => {
    modal.classList.remove('active');
  });

  document.getElementById('bookForm').addEventListener('submit', (e) => {
    e.preventDefault();
    alert('আপনার Booking Request পাঠানো হয়েছে!');
    modal.classList.remove('active');
  });
</script>

</body>
</html>
