/**
 * Sagaretxe – Lógica de Registro de Socios del Club Sagaretxe
 */
document.addEventListener('DOMContentLoaded', () => {
    const clubForm = document.getElementById('clubRegistrationForm');
    const feedbackMsg = document.getElementById('clubFeedback');
    const submitBtn = document.getElementById('clubSubmitBtn');
    const formWrapper = document.getElementById('clubFormWrapper');
    const successWrapper = document.getElementById('clubSuccessWrapper');

    if (!clubForm) return;

    clubForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const payload = {
            name: document.getElementById('clubName').value.trim(),
            surname: document.getElementById('clubSurname').value.trim(),
            phone: document.getElementById('clubPhone').value.trim(),
            email: document.getElementById('clubEmail').value.trim(),
            postal_code: document.getElementById('clubPostalCode').value.trim(),
            pref_space: document.getElementById('clubPrefSpace').value,
            pref_food: document.getElementById('clubPrefFood').value,
            pref_drink1: document.getElementById('clubPrefDrink1').value,
            pref_drink2: document.getElementById('clubPrefDrink2').value,
            pref_time: document.getElementById('clubPrefTime').value,
            how_knew_us: document.getElementById('clubHowKnewUs').value
        };

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Registrando socio...';
        feedbackMsg.style.display = 'none';

        try {
            const baseUrl = window.SAGARETXE_CONFIG?.baseUrl || '';
            const res = await fetch(`${baseUrl}/api/club`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(payload)
            });

            const data = await res.json();

            if (data.member) {
                // Éxito: ocultar formulario y mostrar confirmación
                formWrapper.style.display = 'none';
                successWrapper.style.display = 'block';

                const memberNum = data.member.id ? (data.member.id + 9000) : 'Socio VIP';
                document.getElementById('clubMemberNumber').innerText = `Nº de Socio: #${memberNum}`;
                document.getElementById('clubMemberName').innerText = `${payload.name} ${payload.surname}`;
                document.getElementById('clubMemberPhone').innerText = payload.phone;

                window.scrollTo({ top: successWrapper.offsetTop - 80, behavior: 'smooth' });
            } else if (data.message) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Registrarme al Club Gastronómico (Gratis)';
                feedbackMsg.className = 'alert-feedback error';
                feedbackMsg.innerHTML = `<i class="fa-solid fa-circle-exclamation"></i> ${data.message}`;
                feedbackMsg.style.display = 'block';
            } else {
                throw new Error('Respuesta inesperada');
            }
        } catch (error) {
            console.error(error);
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Registrarme al Club Gastronómico (Gratis)';
            feedbackMsg.className = 'alert-feedback error';
            feedbackMsg.innerHTML = '<i class="fa-solid fa-triangle-exclamation"></i> Error al conectar con el servidor. Inténtalo de nuevo o llámanos al 914 46 25 88.';
            feedbackMsg.style.display = 'block';
        }
    });
});
