// Variabel untuk menyimpan data berupa string
let expression = '';
let currentNumber = '0';
let history = [];

// Fungsi update display
function updateDisplay() {
    currentOperand.textContent = currentNumber;
}

// Fungsi untuk update history
function updateHistory() {
    if (history.length === 0) {
        historyList.innerHTML = '<p class="text-slate-400 text-center text-sm">Belum ada riwayat</p>';
    } else {
        historyList.innerHTML = history.map((item, index) => `
            <div class="bg-calc-darker rounded-lg p-3 hover:bg-slate-700 transition-colors cursor-pointer">
                <div class="text-slate-400 text-sm">${item.expression}</div>
                <div class="text-white text-lg font-bold">= ${item.result}</div>
                 <button class="text-red-500 text-sm mt-1 w-full" onclick="deleteHistory(${index}); event.stopPropagation();">Hapus</button>
            </div>
           
        `).reverse().join('');
    }
}


// Tambah angka/operator/tanda kurung
function appendNumber(num) {
    // Reset jika saat ini menampilkan '0'
    if (currentNumber === '0' && num !== '.' && num !== '(' && num !== ')') {
        currentNumber = '';
        expression = '';
    }
    
    // Cegah multiple decimal points (kecuali untuk operator)
    if (num === '.') {
        // Cek apakah sudah ada titik di angka terakhir
        let lastNumber = expression.split(/[\+\-\*\/\(\)]/).pop();
        if (lastNumber && lastNumber.includes('.')) return;
    }
    
    // Tambahkan ke expression (simpan operator asli untuk eval)
    expression += num;
    
    // Update display dengan simbol yang lebih mudah dibaca
    currentNumber = expression.replace(/\*/g, '×').replace(/\//g, '÷');
    updateDisplay();
}


// Hitung dengan eval() 
function compute() {
    if (!expression) return;
    
    try {
        // Hitung langsung dengan eval
        let result = eval(expression);
        
        // Cek error pembagian nol
        if (!isFinite(result)) {
            currentNumber = 'Error';
            clear();
            return;
        }
        
        // Bulatkan hasil
        result = Math.round(result * 100000000) / 100000000;
        
        // Simpan ke history
        history.push({
            expression: expression.replace(/\*/g, '×').replace(/\//g, '÷'),
            result: result
        });
        updateHistory();
        
        // Update tampilan
        currentNumber = result.toString();
        expression = result.toString();
        updateDisplay();
        
    } catch {
        currentNumber = 'Error';
        clear();
    }
}

// Hapus semua (AC)
function clear() {
    expression = '';
    currentNumber = '0';
    updateDisplay();
}

// Hapus digit terakhir (DEL)
function deleteNumber() {
    if (!expression || expression === '0') return;
    
    // Hapus karakter terakhir dari expression
    expression = expression.slice(0, -1);
    
    // Update currentNumber
    currentNumber = expression || '0';
    updateDisplay();
}

// Object calculator untuk kompatibilitas dengan HTML
const calculator = {
    appendNumber: appendNumber,
    compute: compute,
    clear: clear,
    delete: deleteNumber
};


function clearhistory() {
    history = [];
    updateHistory();
}

function deleteHistory(index) {
    
    // Hapus item dari array
    history.splice(index, 1);
    updateHistory();
}

// Initialize
updateDisplay();