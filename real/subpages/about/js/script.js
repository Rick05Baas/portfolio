const canvas = document.getElementById("bubblesCanvas");
  const ctx = canvas.getContext("2d");

  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  const bubbles = [];
  const bubbleCount = 30;

  for (let i = 0; i < bubbleCount; i++) {
    bubbles.push({
      x: Math.random() * canvas.width,
      y: canvas.height + Math.random() * 100,
      radius: Math.random() * 20 + 10,
      speed: Math.random() * 2 + 1,
      color: `rgba(0, 173, 181, ${Math.random() * 0.6 + 0.4})`
    });
  }

  function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i < bubbles.length; i++) {
      const bubble = bubbles[i];
      bubble.y -= bubble.speed;

      ctx.beginPath();
      ctx.arc(bubble.x, bubble.y, bubble.radius, 0, Math.PI * 2);
      ctx.fillStyle = bubble.color;
      ctx.fill();

      if (bubble.y + bubble.radius < 0) {
        bubble.y = canvas.height + bubble.radius;
      }
    }

    requestAnimationFrame(animate);
  }

  animate();

  // Adjust canvas size on window resize
  window.addEventListener("resize", () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  });