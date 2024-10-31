import { Link } from "@inertiajs/react";

export default function Pagination({ links }) {
  return (
    <nav className="text-center mt-4">
      {links.map((link) => (
        <Link
          preserveScroll
          className={`inline-block py-2 px-3 rounded-lg text-gray-200 text-xs ${link.active ? "bg-gray-950" : ""
            } ${link.url ? "hover:bg-gray-950" : "text-gray-500 cursor-not-allowed"
            }`}
          key={link.label} // Add a unique key prop
          href={link.url || "#"} // Provide the URL to navigate, use "#" if no URL
          dangerouslySetInnerHTML={{ __html: link.label }} // Keep if link.label has HTML
        />
      ))}
    </nav>
  );
}
