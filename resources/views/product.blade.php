<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>আমারফসল - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Noto Sans Bengali', sans-serif;
            background-color: #f7f7f7;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 50;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: #fff;
            padding: 2rem;
            border-radius: 1rem;
            width: 90%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: 600;
        }
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

                    <!-- Example product rows -->
                    <tr>
                        <td class="py-2 px-4">বীজ 🌾</td>
                        <td>কৃষি পণ্য</td>
                        <td>500</td>
                        <td>450</td>
                        <td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">কৃষি সার 💊</td>
                        <td>কৃষি পণ্য</td>
                        <td>1200</td>
                        <td>1000</td>
                        <td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">পাটের খড় 🌿</td>
                        <td>ফার্ম সামগ্রী</td>
                        <td>300</td>
                        <td>270</td>
                        <td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">ট্রাক্টর 🚜</td>
                        <td>ফার্ম ইকুইপমেন্ট</td>
                        <td>1500000</td>
                        <td>1400000</td>
                        <td><button class="bg-emerald-600 text-white px-3 py-1 rounded-lg bookBtn">Book Now</button>
                        </td>
                    </tr>

                    <!-- You can keep all your other product rows -->
                </tbody>
            </table>
        </div>
    </main>

    <!-- Modal -->
    <div id="bookModal" class="modal">
        <div class="modal-content">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4 text-center">📌 Book Now</h2>
            <form id="bookForm" method="POST" action="{{ route('book.store') }}" class="space-y-4">
                @csrf

                <!-- Hidden Product Name -->
                <input type="hidden" id="product_name" name="product_name">

                <div>
                    <label for="mobile">মোবাইল নাম্বার</label>
                    <input type="tel" id="mobile" name="mobile" placeholder="01XXXXXXXXX"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <div>
                    <label for="pickup_date">কবে নিতে চাও</label>
                    <input type="date" id="pickup_date" name="pickup_date"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <div>
                    <label for="return_date">কবে ফেরত দিবে</label>
                    <input type="date" id="return_date" name="return_date"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <div class="grid grid-cols-1 gap-4">

                    <div>
                        <label for="division">Division</label>
                        <select id="division" name="division"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-lg" required>
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
                        <select id="district" name="district"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-lg" required>
                            <option value="">-- জেলা নির্বাচন করুন --</option>
                        </select>
                    </div>

                    <div>
                        <label for="house_no">House No</label>
                        <input type="text" id="house_no" name="house_no" placeholder="House No"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-lg" required>
                    </div>

                    <div>
                        <label for="road_no">Road No</label>
                        <input type="text" id="road_no" name="road_no" placeholder="Road No"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-lg" required>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-emerald-600 text-white font-semibold p-2 rounded-lg mt-4 hover:bg-emerald-700 transition">
                    Submit
                </button>

                <button type="button" id="closeModal"
                    class="w-full bg-gray-300 text-gray-700 font-semibold p-2 rounded-lg mt-2 hover:bg-gray-400 transition">
                    Close
                </button>

            </form>

        </div>
    </div>

    <script>
        // District Auto Load
        const divisionSelect = document.getElementById('division');
        const districtSelect = document.getElementById('district');

        const divisionDistricts = {
            "Dhaka": ["Dhaka", "Faridpur", "Gazipur", "Gopalganj", "Jamalpur", "Kishoreganj", "Madaripur", "Manikganj",
                "Munshiganj", "Narayanganj", "Narsingdi", "Netrokona", "Rajbari", "Shariatpur", "Sherpur", "Tangail"
            ],
            "Chattogram": ["Bandarban", "Brahmanbaria", "Chandpur", "Chattogram", "Cox's Bazar", "Cumilla", "Feni",
                "Khagrachhari", "Lakshmipur", "Noakhali", "Rangamati"
            ],
            "Khulna": ["Bagerhat", "Chuadanga", "Jashore", "Jhenaidah", "Khulna", "Kushtia", "Magura", "Meherpur",
                "Narail", "Satkhira"
            ],
            "Barishal": ["Barguna", "Barishal", "Bhola", "Jhalokati", "Patuakhali", "Pirojpur"],
            "Sylhet": ["Habiganj", "Moulvibazar", "Sunamganj", "Sylhet"],
            "Rajshahi": ["Bogura", "Jaipurhat", "Naogaon", "Natore", "Chapainawabganj", "Pabna", "Rajshahi",
                "Sirajganj"
            ],
            "Rangpur": ["Rangpur", "Dinajpur", "Kurigram", "Gaibandha", "Thakurgaon", "Panchagarh", "Nilphamari",
                "Lalmonirhat", "Kamalganj"
            ],
            "Mymensingh": ["Jamalpur", "Mymensingh", "Netrokona", "Sherpur"]
        };

        divisionSelect.addEventListener('change', () => {
            const selected = divisionSelect.value;
            districtSelect.innerHTML = '<option value="">-- জেলা নির্বাচন করুন --</option>';

            if (divisionDistricts[selected]) {
                divisionDistricts[selected].forEach(d => {
                    const opt = document.createElement('option');
                    opt.value = d;
                    opt.textContent = d;
                    districtSelect.appendChild(opt);
                });
            }
        });

        // Modal Handling
        const modal = document.getElementById('bookModal');
        const bookBtns = document.querySelectorAll('.bookBtn');
        const closeModal = document.getElementById('closeModal');

        bookBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                const productName = e.target.closest('tr').children[0].innerText;
                document.getElementById('product_name').value = productName;

                modal.classList.add('active');
            });
        });

        closeModal.addEventListener('click', () => modal.classList.remove('active'));

        // AJAX Submit
        document.getElementById('bookForm').addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = {
                product_name: document.getElementById('product_name').value,
                mobile: document.getElementById('mobile').value,
                pickup_date: document.getElementById('pickup_date').value,
                return_date: document.getElementById('return_date').value,
                division: document.getElementById('division').value,
                district: document.getElementById('district').value,
                house_no: document.getElementById('house_no').value,
                road_no: document.getElementById('road_no').value,
                _token: "{{ csrf_token() }}"
            };

            const response = await fetch("{{ route('book.store') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify(formData)
            });


            const result = await response.json();

            if (result.success) {
                alert("Booking successfully submitted!");
                modal.classList.remove('active');
            }
        });
    </script>

</body>

</html>
